<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="23.php" method="post">
<label>input the number</label>
<input type="text" name="number">
<input type="submit" value="to count">
<?php
$a = $_POST['number'];
$x = 0;
if (is_numeric($a)) {
    while ($a != 0) {
        $b = $a % 10;
        $x = $x + $b;
        $a = ($a - $b) / 10;
    }
} else
    echo "input correct data please";
echo "<br>$x";
?>
</form>
</body>
</html>

