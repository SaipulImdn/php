<?php
$values = array(1, 2, 3, 4);
var_dump($values);

$names = ["Syaiful", "Imanudin", 21];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
$names[]= "Syaiful";
var_dump($names);

var_dump(count($names));

$syaiful = array (
   "id" => "syaiful",
    "name" => "Syaiful Imanudin",
   "age"=> 21,
   "address" => array(
    "city" => "cirebon",
    "country" => "indenosia"
   )
);

var_dump($syaiful);

var_dump($syaiful["age"]);

var_dump($syaiful["address"]["city"]);