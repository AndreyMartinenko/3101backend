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
<form action="13+28.php" method="post">
    <label> <p> <b>table of multiplication 10x10</b></p> </label><br>
</form>
<table border='1'>
<?php
//$cols = 10;
//$rows = 10;
for ($tr = 1; $tr <= 10; $tr++){
    echo "<tr>";
    for ($td = 1; $td <= 10; $td++){
        echo "<td>" . $tr * $td . "</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>