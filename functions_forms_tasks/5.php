<?php

function listOut($path, $word)
{
    $filesArr = [];
    opendir($path);
    $dir = scandir($path);
    foreach ($dir as $element){
        if ($element != '.' && $element != '..') {
            $s=file($element);
            if (in_array($word, $s)) {
                $filesArr[] = $element;
            }
        }

    }
    closedir($dir);
    var_dump($filesArr);

}

listOut('form/', 'php');
//    $path = $_SERVER['DOCUMENT_ROOT']."/".requestPost('folder');
//   listOut($path, 'test');


