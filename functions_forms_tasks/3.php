<?php
require 'form/functions.php';

$fileOpen = fopen('3.dat', 'a');
function getContent($f)
{
    $f1 = file_get_contents('3.dat');
    return $f1;
}

function changeContent($f1)
{
    $count = requestPost('count');
    $newText = array ();
    $text = explode(' ', $f1);
    foreach ($text as  $item) {
        if (iconv_strlen($item,'UTF-8') < $count) {
        array_push($newText,$item);
        }
    }
$newFile =  implode(' ', $newText);
return $newFile;

}

if ($_POST) {
   if ($f = fopen('3.dat', 'r')) {
       //$count = requestPost('count');

       fwrite($fileOpen, changeContent(getContent($f))."\r\n");
       fclose($fileOpen);
   }
}



require "3.html";