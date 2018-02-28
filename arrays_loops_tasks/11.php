<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.02.18
 * Time: 10:56
 */
echo "loop 'for':<br>";
for ($i = 0; $i <= 100; $i = $i + 2)
    echo "$i <br>";

echo "loop 'while':<br>";
$j = 0;
while ($j <= 100) {
    echo "$j<br>";
    $j = $j + 2;
}