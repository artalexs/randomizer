<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Генератор рандомных значений</title>
</head>
<body>
    <div class="container">
        <form action="generate.php" method="post">
        <p><label for="">Введите минимальное значение</label><input type="number" name="min"  min ="0"></p>
        <p><label for="">Введите максимальное значение</label><input type="number" name="max" ></p>
        <p><input type="submit" value="Узнать"></p>
        </form>
        <p><a href="identity.php">Узнать сгенерированное значение по ID</a></p>
    </div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?=date('Y')?> </p>
    </div>
</footer>
</body>
</html>