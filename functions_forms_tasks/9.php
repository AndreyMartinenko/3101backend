<?php

function requestPost($key)
{
    if (isset($_POST[$key]) && !empty($_POST[$key])) {
        return $_POST[$key];
    }
    return null;
}

function requestGet($key)
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }
    return null;
}
function redirect($to)
{
    header('Location: ' .$to);
    die;
}

function revert($str)
{
    $rts = '';
    for($i=0; $i<=strlen($str); $i++){
        $rts = $str[$i].$rts;
    }
    return $rts;
}

$message = requestGet('message');
if ($_POST) {
    $str = requestPost('string');
    if (revert($str)) {
        $message = revert($str);

        redirect('/backend/functions_forms_tasks/9.php?message='.$message);
    }
    $message = 'input the string';
}
require "9.phtml";
