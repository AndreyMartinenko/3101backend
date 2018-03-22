<?php
//1+x+x^2 +..+x^n implemented by recursion

function mySumPow($x,$n)
{

    if ($n >= 0) {
        return  1 + $x*mySumPow($x,$n-1);
    }

}
var_dump(mySumPow(2,5));