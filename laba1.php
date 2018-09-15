<?
/**
 * Created by PhpStorm.
 * User: raiken
 * Date: 15.09.18
 * Time: 13:25
 */?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Конвентер</title>
</head>
<body>
<h1 align="center">Конвентер температур</h1>
<p>Введите температуру</p>
<input type="text" size="40">
<? ?>

</body>
</html>


$temp = fgets(STDIN, 255); //$number
echo 'Введите во что перевести в фаренгейты F или цельсия C';
$a=fgets(STDIN, 255);
if($a==='F')
{
    $temp*=9/5+32;
    echo 'В системе измерения по Фаренгейту температура = $temp';
}
else
    {

    $temp=($temp-32)*5/9;
    echo 'В системе измерения по Цельсию температура = $temp';
}

