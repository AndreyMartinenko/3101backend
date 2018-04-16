<?php
require_once 'functions.php';

function listOut($path)
{
    $dir = opendir($path);
    while ($list = readdir($dir)){
        if ($list != '.' && $list != '..') {
            echo "<br>$list";
        }

    }
    //return $list;
}

if ($_POST ){
    $path = $_SERVER['DOCUMENT_ROOT']."/".requestPost('folder');
   // listOut($path);

}


require '4.phtml';