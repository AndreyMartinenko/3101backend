<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.18
 * Time: 19:03
 */
function compare($a, $b)
{
    if ($a == $b) {
        echo 'Значения равны';
    } else echo 'Значения не равны';
    echo "<br/>";
}
compare('78', 78);