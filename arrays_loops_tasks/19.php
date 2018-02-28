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
 $day = date('w');


 foreach ($arr as $key => $item){
    if ($key == ($day - 1) ) {
        echo "<i>$item</i><br>";
    } else
        echo "$item<br>";
}