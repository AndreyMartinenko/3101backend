<?php
require_once 'hwload0703.phtml';
if (isset($_FILES['file'])) {
    $errors = [];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileTmp = $_FILES['file']['tmp_name'];
    $extend = explode('.',$_FILES['file']['name']);
    $fileExt = strtolower(end($extend));
    $expenImage = ["jpeg", "jpg", "png"];
    $expenDoc = ["txt", "doc", "docx"];
    //var_dump($_FILES);
  if ($fileSize > 2097152) {
      $errors[] = 'size of file must be lower 2Mb';
      print_r($errors);
  }

    if (empty($errors) && in_array($fileExt,$expenImage)) {
        move_uploaded_file($fileTmp, "img/" . $fileName);
        echo "loaded image";
        }

    if (empty($errors) && in_array($fileExt,$expenDoc)){
      move_uploaded_file($fileTmp, "doc/".$fileName);
      echo "loaded text file<br>";
    }


function outImg()
{
    $path = "img/";
    $images = scandir($path);
    if (!empty($images)) {
        for ($i = 2; $i <= count($images) - 1; $i++) {
            echo "<img width='100' padding='10px' src=" . $path . $images[$i] . " >";
        }
    }

}

function outDoc()
{
    $docDir = opendir('doc/');
    while($list = readdir($docDir)) {
        if ($list != '.' && $list != '..') {
            echo "<br>$list";
        }
    }
}
//redirect('hwload0703.php');
outImg();
outDoc();

}
