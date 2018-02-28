<?php
$arr = [];
for ($i=1; $i<=10; $i++) {
    $arr[$i] = rand(0,200);
}
print_r($arr);
$b = array_keys($arr, max($arr));
echo "<br> key of max element = {$b[0]}<br>";

$c = array_keys($arr, min($arr));
echo "<br>key of min element =  {$c[0]}<br>";

// change elements with buffer
        //$key = $arr[$c];
        //$arr[$c]= $arr[$b];
        //$arr[$b] = $key;

list($arr[$c[0]], $arr[$b[0]]) = array($arr[$b[0]],$arr[$c[0]]);
echo 'after changed in array<br>';
print_r($arr);
