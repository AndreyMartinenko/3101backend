<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.18
 * Time: 22:51
 */

$arr = array('green' => 'зеленый', 'red' => 'красный','blue' => 'голубой');
 $en = array();
 $ru = array();


  foreach ($arr as $key => $item) {
      array_push($en, $key);
      array_push($ru, $item);
  }
unset($key,$item);
  print_r($en);
  echo "<br>";
  print_r($ru);