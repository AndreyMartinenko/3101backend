<?php
session_start();
include 'savedPages.php';
pageSave();
echo "<h1>Second Page</h1>";
include 'menu.php';
//include 'visit.php';