<?php

$gender = "PRIA";

$hi = null;

if ($gender == "PRIA") {
    $hi = "Hi pria";
} else{
    $hi = "Hi nona";
}

echo $hi .PHP_EOL;

$gender = "PRIA";
$hi = $gender = "PRIA" ? "hi bro" : "Hi nona";