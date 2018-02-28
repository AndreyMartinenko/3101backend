<?php


$s = 'x';
for (; strlen($s) <= 20; $s = "$s" . "xx" ) {
    echo "$s<br>";
}