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
<form action="" method="post">
    <label>input number of cols</label>
    <input type="number" name="cols"><br><br>
    <label>input number of rows</label>
    <input type="number" name="rows"><br><br>
    <label> <p> <b>colorful table</b></p> </label>
    <input type="submit" name="draw" value="draw"><br>
</form>
<table border='1'>
    <?php
    $cols = $_POST['cols'];
    $rows = $_POST['rows'];
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    for ($tr = 1; $tr <= $cols; $tr++){
        echo "<tr>";
            for ($td = 1; $td <= $rows; $td++){
                $color = rand(0, count($colors)-1);
                echo "<td style='background-color:" . $colors[$color] . "'>" . rand(1,1000) . "</td>";
            }
        echo "</tr>";
    }

    ?>
</table>

</body>
</html>