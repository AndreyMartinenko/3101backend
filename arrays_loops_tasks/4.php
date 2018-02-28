<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.18
 * Time: 22:51
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo "keys:<br>";
    foreach ($arr as $key => $value) {
        echo "$key <br>";
    }
    unset($key);
    echo "<hr>";
echo "values:<br>";
    foreach ($arr as $key =>$value) {
        echo "$value <br>";
    }
unset($value);