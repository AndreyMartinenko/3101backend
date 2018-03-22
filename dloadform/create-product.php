<?php

require_once 'functions.php';

define('IMAGE_JPG', 'image/jpeg');
define('IMAGE_PNG', 'image/png');
define('EXT_PNG', '.png');
define('EXT_JPG', '.jpg');

function getFilename(array $file)
{
    $uniqid = uniqid();

    switch ($file['type']) {
        case IMAGE_JPG:
            return $uniqid . EXT_JPG;
        case IMAGE_PNG:
            return $uniqid . EXT_PNG;
        default:
            return false;
    }
}

// todo: сформировать сообщение о том какое именно поле неправильно заплонено
function isValuesValid($title, $price, $file)
{
    if (empty($file) || !is_array($file)) {
        return false;

    }

    if (!isset($file['error'])) {
        return false;
    }

    $allowedFormats = [IMAGE_JPG, IMAGE_PNG];
    $textFieldsValid = !empty($title) && !empty($price);
    $imageTypeValid = in_array($file['type'], $allowedFormats);

    return !$file['error'] && $imageTypeValid && $textFieldsValid;
}

function createProduct($title, $price, $description = null)
{
    return [
        'title' => $title,
        'price' => $price,
        'description' => $description,
    ];
    // return compact('title', 'price', 'description');
}

function loadProducts()
{
    if (!file_exists('products.txt')) {
        return [];
    }
    $products = file_get_contents('products.txt');

    return unserialize($products);
}
//вывод изображений
function out()
{
    $path = "img/";
    $images = scandir($path);
    for($i=2; $i<=count($images)-1; $i++) {
        echo "<img width='100' src=".$path.$images[$i].">";
    }

}


function saveProduct(array $product)
{
    $products = loadProducts();
    $products[] = $product;
    $products = serialize($products);
    file_put_contents('products.txt', $products);
}
$message1 = null;
$message2 = null;
$message = requestGet('message'); // $_GET['message']
$title = requestPost('title');
$price = requestPost('price');
$description = requestPost('description');
$file = requestFiles('image');

if ($_POST) {

    $validation = isValuesValid($title, $price, $file);
    if ($validation) {
        $product = createProduct($title, $price, $description);
        saveProduct($product);
        $filename = getFilename($file);
        $message = 'Saved';
        move_uploaded_file($_FILES['image']['tmp_name'], "img/".$filename);
        out();
        redirect('/backend/functions_forms_tasks/dloadform/create-product.php?message=' . $message); //die

    }

    $message = 'Form invalid';
    //проверка на незаполненность и соответствие типам
    if (empty($title) || !is_string($title)) {
        $message1 = 'incorrect field Title';
    }
    if (empty($price) || !is_numeric($price)) {
        $message2 = 'incorrect field Price';
    }

}

require 'create-product-layout.phtml';
