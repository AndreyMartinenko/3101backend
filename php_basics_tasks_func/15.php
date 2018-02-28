<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calc</title>
</head>
<body>
<form action="15.php" method="post">
    <p> first number <input type="text" name="numb1"></p>
    <p>Choose operator</p>
    <input type="radio" name="operator" value="+">+<br>
    <input type="radio" name="operator" value="-">-<br>
    <input type="radio" name="operator" value="*">*<br>
    <input type="radio" name="operator" value="/">/<br>
    <input type="radio" name="operator" value="%">%<br>
    <p> second number <input type="text"  name="numb2"></p>
    <button type="submit" name="Count">count</button><br>

    <?php
    function myCalc()
    {

        $result = '';
        $numb1 = $_POST['numb1'];
        $numb2 = $_POST["numb2"];
        $operator = $_POST["operator"];
        if ($operator) {
            switch ($operator) {
                case '+':
                    $result = $numb1 + $numb2;
                    break;
                case '-':
                    $result = $numb1 - $numb2;
                    break;
                case '*':
                    $result = $numb1 * $numb2;
                    break;
                case '/':
                    if ($numb2 === 0)
                        $result = "dividion by zero";
                    else
                        $result = $numb1 / $numb2;
                    break;
                case '%':
                    $result = $numb1 % $numb2;
                    break;
                default:
                    $result = "unknown operator";
            }
            if ($result)
                echo 'RESULT = ' . $result;
        } else
            echo "Choose operator";
    }
    myCalc();
    ?>
</form>
</body>
</html>