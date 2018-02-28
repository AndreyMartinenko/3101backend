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
<form action="24.php" method="post">
<label>input the number</label><br>
<input type="text" name="number"><br>

<label>input the check's number </label><br>
<input type="text" name="number1"><br>

<input type="submit" value="to count">
<?php
$a = $_POST['number'];
$a1 = $_POST['number1'];
$x = 0;
while ( $a!=0) {
    $b = $a % 10;
    if ($a1 == $b) {
        $x++;
    }
    $a = ($a - $b) / 10;
}
echo "<br>$x";
?>
</form>
</body>
</html>

