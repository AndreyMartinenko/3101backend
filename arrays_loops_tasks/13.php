<?php
$arr = array([],[]);
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        //$arr([$i],[$j]) = $i * $j;
        $el = $i * $j;
        array_push($arr([$i],[$j]), $el);
        echo " | " . "$arr([$i],[$j])";


    }
}
//print_r($arr);
echo "<br>";