<?php

function week($day)
{
    echo "$day <br/>";
    switch ($day) {
        case 1:
            echo " Это рабочий день";
            break;
        case 2:
            echo "Это рабочий день";
            break;
        case 3:
            echo "Это рабочий день";
            break;
        case 4:
            echo "Это рабочий день";
            break;
        case 5:
            echo "Это рабочий день";
            break;
        case 6:
            echo "Это выходной день";
            break;
        case 7:
            echo "Это выходной день";
            break;
    }

}
week(rand(1,7));