<?php

            //n!

function factorial($a)
{
    if ($a == 0 || $a==1 ) {
        return 1;
    }

    return factorial ($a - 1)*$a;

}
var_dump(factorial (7));









