<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="style/123.css" />
</head>
<body>
<h1>Угадай число</h1>
<form method="POST" >
    Введи число <input type="text" name="num" >

    <br>
    <hr>
    <input type="submit" value="OK">
</form>
<div>
    <?php /**/
    $value = $_POST['num'];/*Получаем переменные из post запросов*/

    if($a==='ф') /*переводим из цельсия в фаренгейты*/

        $value*=9/5+32;
    else /* переводим из фаренгейтов в цельсия*/
        $value=($value-32)*5/9;
    echo $value; /*вывод на сайт*/
    ?>
</div>

</body>
</html>