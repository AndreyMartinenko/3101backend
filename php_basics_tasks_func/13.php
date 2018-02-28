<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.18
 * Time: 0:36
 */

function speed($s,$t)
{
    if ($t != 0) {
        $v = $s / $t;
        echo "Скорость автомобиля= $v km/h";
        echo "<br>";
        echo "Скорость автомобиля=" . $v * 1000 / 3600 . "m/s";
    }
}
speed(60,0.8);

//secont mode
function speedV()
{
    echo "<br>";
    echo "<br>";
    echo "Скорость автомобиля: \$v=\$s/\$t (km/h)";
    echo "<br>";
    echo "Скорость автомобиля: \$v=3.6*(\$s/\$t) (m/s)";
}
speedV();