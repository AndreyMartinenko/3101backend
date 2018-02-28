<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.02.18
 * Time: 19:12
 */
function compare($a, $b)
{
    var_dump($a, $b);
    echo '<br />';
    if ($a == $b) {
        echo 'равны';
    } else
        echo 'не равны';
}
compare('78', 78);