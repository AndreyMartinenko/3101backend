<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.02.18
 * Time: 10:56
 */
$arr = ['January', 'February', 'March',
        'April', 'May', 'June', 'July',
        'August', 'September','October',
        'November','December'
       ];
$month = date('F');
foreach ($arr as $value){
      if ($month == $value) {
        echo "<strong>$value</strong><br>";
    } else
        echo "$value<br>";
}
