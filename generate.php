<?
require_once('connection.php');

if(isset($_REQUEST['min']) && isset($_REQUEST['max'])){
    
    $min = $_REQUEST['min'];
    $max = $_REQUEST['max'];

    if($min < $max){
    
    try {
        //соединение с БД
        $dbcon = new PDO('mysql:host='. $host .';dbname='. $database, $user, $password);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $data = $dbcon->prepare('INSERT INTO randomness (rand_int) VALUES(:rand_int)');
        $data->bindParam(':rand_int', $fieldData);
    
        $fieldData= random_int($min, $max);
        $data->execute();

        echo "Сгенерировано число: ". $fieldData."<br>";
        } catch(PDOException $e) {
            echo 'Ошибка: ' . $e->getMessage();
        }


    try {
        //Получение идентификатора вновь сгенерированного значения
        $data = $dbcon->prepare('SELECT id FROM randomness WHERE rand_int = :rand_int');
        $data->execute(array('rand_int' => $fieldData));

        $result = $data->fetch();

        echo "Идентификатор: ". $result[0];

    } catch(PDOException $e) {
        echo 'Ошибка: ' . $e->getMessage();
    }

    }else{
        echo "Минимальное значение должно быть больше максимального!";
    }
}

