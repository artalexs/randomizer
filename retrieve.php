<?
require_once('connection.php');

$id = $_REQUEST['id'];
if(isset($_REQUEST['id'])){


    try {
        //соединение с БД
        $dbcon = new PDO('mysql:host='. $host .';dbname='. $database, $user, $password);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $data = $dbcon->prepare('SELECT rand_int FROM randomness WHERE id = :id');
        $data->execute(array('id' => $id));

        $result = $data->fetch();

        echo "Сгенерированное значение: ". $result[0];

    } catch(PDOException $e) {
        echo 'Ошибка: ' . $e->getMessage();
    }
}