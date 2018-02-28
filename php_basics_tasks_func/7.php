<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.02.18
 * Time: 23:47
 */
$age = 17;
function ifAge($age)
{
    echo "Вам $age лет.<br>";
    if ($age <= 59 && $age > 18)
        echo "Вам еще работать и работать";
    elseif ($age > 59)
        echo "Вам пора на пенсию";
    elseif ($age > 0 && $age <= 17)
        echo "Вам еще рано работать";
}

ifAge(100);