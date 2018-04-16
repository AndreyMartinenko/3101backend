<?php
session_start();
include 'savedPages.php';
echo "<h1> here are visited pages</h1>";
//var_dump(pageSave('pages'));
$pages = explode(',', pageSave());

var_dump($pages);

if (is_array($pages)) {
    echo "<ol>";
    array_pop($pages);
    foreach ($pages as $page){
        echo "<li>$page</li>";
    }
    echo "</ol>";
}
//session_destroy();
//$pages = explode(',', $list);
//print_r($pages);