
<?php
/*session_start(); //начало сессии
if (!$_SESSION['start']) {
    $_SESSION['k']=10;
*/
//session_start();
$I=$_POST['p']*$_POST['r']*$_POST['t'];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="style/123.css" />
</head>
<body>

<h1>Кредитный калькулятор</h1>
<form method="POST">
    Сумма, взятая в долг <input type="text" name="p" >
    Процентная стравка <input type="text" name="r" >
    Срок кредита в годах <input type="text" name="t" >

    <br>
    <hr>
    <input type="submit" value="OK">
</form>
<div>
    <h2>   <?php echo "Сумма возврата по кредиту составит:  $I"?> </h2>
</div>
</body>
</html>