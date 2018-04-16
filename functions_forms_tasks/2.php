<?php
include 'form/functions.php';
define('MAX_COUNT', 2);
//$newWords = array();
function outTop($string)
{
//    $newWords = [];
    $words = getWords($string);
    usort($words, "sortLen");
    for($i=0; $i <= 2; $i++) {
        var_dump($words[$i]);
      // $newWords = array_push($newWords , $words[$i]);
    }
  //  return $newWords;
}

function sortLen($a, $b){
    return strlen($b) -strlen($a);
}

function getWords($string)
{
$words = explode(' ', $string);

return array_filter($words);

}

function countWords($string)
{
$words = getWords($string);

    return count($words);
}

$message = null;
$words = [];
if ($_POST) {
    $s = requestPost('string');
    if (countWords($s) > MAX_COUNT){
        $words = outTop($s);
        $message = 'TOP 3 words';
    } else
        $message = 'input bigger string';
}

?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>input the string</label><br>
    <textarea name="string"></textarea>
    <button type="submit">Go</button>
</form>

<?=$message ?>
<br>
<?php //foreach($newWords as $word): ?>
<!--    <li>--><?//=$word?><!--</li>-->
<?php //endforeach; ?>


</body>
</html>



