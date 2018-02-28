<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.02.18
 * Time: 10:56
 */


$s = 'x';
for (; strlen($s) <= 20; $s = "$s" . "x" ) {
    echo "$s<br>";
}