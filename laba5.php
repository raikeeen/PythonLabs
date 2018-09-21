<?php
session_start(); //начало сессии
if (!$_SESSION['start']) {
    $_SESSION['rand']=rand(1,3);//если 1 камень если 2 ножницы если 3 бумага
    $_SESSION['countK']=0;
    $_SESSION['countYa']=0;
    $_SESSION['count']=0;
    $radio = $_POST["MyRadio"];
    $_SESSION['start']=true;
}

if (isset($_POST['start']))
{
    if($_SESSION['count']>=3)
    {
        if($radio=="k" && $_SESSION['rand']==1)
      {
            $_SESSION['countK']++;
            $_SESSION['countYa']++;
            $_SESSION['count']++;
      }
        if($radio=="k" && $_SESSION['rand']==2)
        {
            $_SESSION['countYa']++;
            $_SESSION['count']++;
        }
        if($radio=="k" && $_SESSION['rand']==3)
        {
            $_SESSION['countK']++;
            $_SESSION['count']++;
        }

//
        if($radio=="n" && $_SESSION['rand']==2)
        {
            $_SESSION['countK']++;
            $_SESSION['countYa']++;
            $_SESSION['count']++;
        }
        if($radio=="n" && $_SESSION['rand']==3)
        {
            $_SESSION['countYa']++;
            $_SESSION['count']++;
        }
        if($radio=="n" && $_SESSION['rand']==1)
        {
            $_SESSION['countK']++;
            $_SESSION['count']++;
        }

        //
        if($radio=="b" && $_SESSION['rand']==3)
        {
            $_SESSION['countK']++;
            $_SESSION['countYa']++;
            $_SESSION['count']++;
        }
        if($radio=="b" && $_SESSION['rand']==1)
        {
            $_SESSION['countYa']++;
            $_SESSION['count']++;
        }
        if($radio=="b" && $_SESSION['rand']==2)
        {
            $_SESSION['countK']++;
            $_SESSION['count']++;
        }
        $_SESSION['start']=false;
    }
}
$k=$_SESSION['count'];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="style/123.css" />
</head>
<body>

<h1>Игра камень ножницы бумага</h1>
<form method="POST">
    <input type="radio" id="contactChoice1"
           name="contact" value="k">
    <label for="contactChoice1">Камень</label>
    <br>

    <input type="radio" id="contactChoice1"
           name="contact" value="n">
    <label for="contactChoice1">Ножницы</label>
    <br>
    <input type="radio" id="contactChoice1"
           name="contact" value="b">
    <label for="contactChoice1">Бумага</label>
    <br>
    <hr>
    <input type="submit" value="OK">
</form>
<div>
  <h1> <? echo "Колличество попыток: $k";?></h1>
    <h2>   <?php  ?> </h2>
</div>
</body>
</html>