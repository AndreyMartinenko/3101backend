<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.02.18
 * Time: 15:42
 */
function myOut($c, $d)
{
    $c = 'third string';
    $d = 'fourth string';
    echo 'first string';
    echo "<br>";
    print 'second string';
    echo "<br>";
    echo $c;
    echo "<br>";
    printf($d);
}
myOut('third string', 'fourth string');