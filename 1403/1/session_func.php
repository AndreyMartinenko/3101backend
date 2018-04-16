<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.03.18
 * Time: 15:18
 */


function requestPost($key)
{
    if (isset($_POST[$key])){
        return $_POST[$key];
    }
    return null;
}

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