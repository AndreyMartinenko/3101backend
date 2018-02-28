<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.02.18
 * Time: 23:43
 */

function ifAge($age)
{
    echo "Вам $age лет.<br>";
    if ($age <= 59 && $age > 18)
        echo "Вам еще работать и работать";
    if ($age > 59)
        echo "Вам пора на пенсию";
}
ifAge(75);