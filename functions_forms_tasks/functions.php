<?php

function requestFiles($key)
{
    if (isset($_FILES[$key])) {
        return $_FILES[$key];
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

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

function isPrime($number)
{
    if (!is_numeric($number)) {
        return false;
    }

    if ($number < 2) {
        return false;
    }

    if ($number <= 3) {
        return true;
    }

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

function isNumberPositive($number)
{
    if (!is_numeric($number)) {
        return false;
    }

    if ($number < 1) {
        return false;
    }

    return true;
}

function redirect($to)
{
    header('Location: ' . $to);
    die;
}