<?php
session_start();
include 'savedPages.php';
pageSave();
echo "<h1>Third Page</h1>";
include 'menu.php';
//include 'visit.php';