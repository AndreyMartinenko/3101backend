<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.02.18
 * Time: 10:56
 */

$arr = ['Monday', 'Tuesday',
        'Wednesday', 'Thursday',
        'Friday', 'Saturday', 'Sunday'
        ];
    foreach ($arr as $key => $item) {
        if($key == (count($arr) - 1)){
            echo "<strong>$item</strong><br>";
        } elseif ($key == (count($arr) - 2)) {
            echo "<strong>$item</strong><br>";
        } else
            echo "$item<br>";
    }
