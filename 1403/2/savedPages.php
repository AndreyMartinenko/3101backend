<?php

function sessionSet($key, $value)
{
    return $_SESSION[$key] = $value;
}

function sessionGet($key)
{
    if (sessionExist($key)) {
        return $_SESSION[$key];
    }
    return null;
}

function sessionExist($key)
{
    return isset($_SESSION[$key]);
}

//$list = '';
//var_dump($list = sessionGet('pages'));
function pageSave()
{
  //global $list;
  //$list = sessionGet($key);

        return $_SESSION['pages'] .= $_SERVER['PHP_SELF']. ",";


    //return $list;
}

//$_SESSION['pages'] .= $_SERVER['PHP_SELF']. ",";
//pageSave();