<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.02.18
 * Time: 20:49
 */
//first mode
function deConst()
{
    define('DAYS_COUNT', 7);
    define('MONTH_COUNT', 12);
}
deConst();

//second mode
function deConstant()
{
    const DAYS_COUNT = 7;
    const MOUNTH_COUNT = 12;
}
deConstant();