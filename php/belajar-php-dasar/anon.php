<?php

$sayhello = function (string $name)
{
    echo "Hello $name" . PHP_EOL;
};

$sayhello('eko');
$sayhello('budi');

function saygodbay(string $name, $filter)

{
    $finalname = $filter($name);;
    echo "Good bye $finalname " .PHP_EOL;
}

saygodbay("eko", function (string $name): string {
    return strtoupper($name);
});