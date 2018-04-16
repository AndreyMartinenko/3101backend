
<?php
session_start();
include 'savedPages.php';
pageSave();
echo "<h1>First Page</h1>";
include 'menu.php';
//include 'visit.php';

