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
<form action="21.php" method="post">

</form>
<table border="1">
<?php
$j = 1;
for ($i = 1; $i <= 9; $i++ ) {
    echo "<tr>";
    for ($j = 1; $j <= $i; $j++) {

        echo "<td>" . $i . "</td>";

    }
    echo "</tr><br>";
}
?>

</table>
</body>
</html>
