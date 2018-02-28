<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.02.18
 * Time: 23:50
 */

function ifAge($age)
{
    if ($age < 0 || is_numeric($age) == false) {
        echo "Неизвестный возраст";
    }
    echo "Вам $age лет.<br>";

    if ($age <= 59 && $age > 18)
        echo "Вам еще работать и работать";
    if ($age > 59)
        echo "Вам пора на пенсию";
    if ($age > 0 && $age <= 17)
        echo "Вам еще рано работать";

}
ifAge(14);