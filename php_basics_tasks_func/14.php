<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.18
 * Time: 0:52
 */


function fooo()
{
    $foo = 'bar';
    $bar = 10;
    echo $$foo;
}
fooo();