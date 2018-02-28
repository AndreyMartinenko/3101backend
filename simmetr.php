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
<form action="simmetr.php" method="post" name="input" >
    <label>input number for the check </label><br>
    <input type="text" name="input"  >
    <input type="submit" name="check" value="check">
</form>

<?php
$numb = $_POST["input"];
$new_numb = 0;
if ($numb == 0 || $numb == null) {
    echo "input the number for check";
}
$numb1 = $numb;
 while ($numb1 != 0 ) {
     $nu = $numb1 % 10;
     $numb1 = ($numb1-$nu)/10;
     $new_numb = ($new_numb * 10) + $nu;
 }
 if ($new_numb == $numb) {
    echo "DA";
} else echo "NET";

?>


</body>
</html>


