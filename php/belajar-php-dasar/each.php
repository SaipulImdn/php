<?php

$names = ["Eko", "Kurniawan", "Khanedy"];

foreach( $names as $name) {
    echo "hello $name" .PHP_EOL;
}

$person = [
    "First_name" => "ipul",
    "middle_name" => "sahaya",
    "last_name" => "hooh"
];

foreach($person as $key => $value) {
    echo "$key : $value" .PHP_EOL;
}