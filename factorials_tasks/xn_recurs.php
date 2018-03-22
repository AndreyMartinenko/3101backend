<?php
//x^n implemented by recursion

function mypow($x, $n)
{

    if ($n == 1){
        return $x;
    }
    if ($n == 0) {
        return 1;
    }

        return  $x * mypow($x, $n - 1);

}
var_dump(mypow(3,3));