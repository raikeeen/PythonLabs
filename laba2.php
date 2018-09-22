<?php
session_start(); //начало сессии
if (!$_SESSION['start']) {
    $_SESSION['rand']=rand(1,100);
    $_SESSION['start']=true;
}
if (isset($_POST['num']))
{
    if ($_POST['num'] > $_SESSION['rand']) {
        $a = "Меньше";
    } elseif ($_POST['num'] < $_SESSION['rand']) {
        $a = "Больше";
    } else {
        $a = "Правильно!!!";
        $_SESSION['start'] = false;
    }
}
else $a='';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="style/123.css" />
</head>
<body>

<h1>Загадайте число от 1 до 100</h1>
<form method="POST">
    Введите число <input type="text" name="num" >

    <br>
    <hr>
    <input type="submit" value="OK">
</form>
<div>
    <h2>   <?php echo $a."<br>"; ?> </h2>
</div>
</body>
</html>