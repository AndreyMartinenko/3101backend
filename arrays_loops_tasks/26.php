<?php
$arr = [];
for ($i = 0; $i<=50; $i++) {
    $arr[$i] = rand(-50, 50);
}
print_r($arr);
$proizd = 1;
foreach ($arr as $key => $value) {
    if ( ( $key % 2 == 0) && ($value > 0)) {
        $proizd = $proizd * $value;
    }
    elseif ($key % 2 == 1 && $value > 0) {
        echo "<br>{$value}";
    }
}
echo "<br>multiplication of elements with double key and elements >0 = {$proizd}";



