<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.02.18
 * Time: 19:05
 */
function compare($a, $b)
{
    if ($a === $b) {
        echo "Значения '$a' и $b : эквивалентны";
    } else
        echo "Значения '$a' и $b : не эквивалентны";
    echo "<br/>";
}
compare ('78', 78);