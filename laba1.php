<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="style/123.css" />
</head>
<body>
<h1>Конвентер температур</h1>
<form method="POST" >
    Температура: <input type="text" name="temp" >
    Система изменерия: <input type="text" name="number">
    <br>
    <hr>
    <input type="submit" value="OK">
</form>
<div>
    <?php /**/
    $value = $_POST['temp'];
    $a=$_POST['number'];
    if($a==='ф')

        $value*=9/5+32;
    else
        $value=($value-32)*5/9;
    echo $value;
    ?>
</div>

</body>
</html>