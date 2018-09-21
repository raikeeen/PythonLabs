<?php
/*session_start(); //начало сессии
if (!$_SESSION['start']) {
    $_SESSION['k']=10;
*/
//session_start();

$k=0;
$l=0;
if($_POST['num']%4===0)//определение високосного года 
{
    $k=1;
    $l=1;
    if($_POST['num']%100===0)
    {
        $k=0;
        if($_POST['num']%400===0)
            $k=1;
    }

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="style/123.css" />
</head>
<body>

<h1>Високосный календарь</h1>
<form method="POST">
    Введите год <input type="text" name="num" >

    <br>
    <hr>
    <input type="submit" value="OK">
</form>
<div>
    <h2>   <?php if($k===1 && $l===1) echo 'год високосный'; //вывод
    elseif($k===0  && $l===1) echo 'год не високосный'; ?> </h2>
</div>
</body>
</html>