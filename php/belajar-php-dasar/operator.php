<?php

$first = [
    "first_name" => "syaiful"
];

$last = [
    "last_name" => "Imanudin"
];

$full = $first + $last;
var_dump($full);


$a = [
    "first_name" => "syaiful",
    "last_name" => "imanudin"
];

$b = [
    "last_name" => "eko",
    "first_name" => "khomarudin"
];

var_dump($a == $b);
var_dump($a === $b);