<?php
session_start();

require 'session_func.php';

if ($_POST && !empty($_POST['name'])) {
    $name = sessionSet('name', requestPost('name'));//$value;
    echo "you can";
    echo "> go to hello.php</a>";
}
//session_destroy();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>name</title>
</head>
<body>
<form method="post" >
    <label>HI, INPUT YOUR NAME</label>
    <input type="text" name="name">
    <button type="submit">GO</button><br>

</form>

</body>
</html>


