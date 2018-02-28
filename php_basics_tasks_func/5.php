<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.02.18
 * Time: 23:37
 */

function ageif($age)
{
    echo "Вам $age лет.<br>";
    if ($age <= 59 && $age > 18)
        echo "Вам еще работать и работать";
}

ageif(30);