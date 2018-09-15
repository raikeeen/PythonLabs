<?php
/**
 * Created by PhpStorm.
 * User: raiken
 * Date: 15.09.18
 * Time: 13:25
 */
echo 'Введите температуру';
$temp = fgets(STDIN, 255);
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

