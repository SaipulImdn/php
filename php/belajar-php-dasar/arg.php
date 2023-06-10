<?php

function sayHello($name = "Anonymous")
{
    echo "Hello $name" .PHP_EOL;
}

sayHello();
sayHello("Budi");

function sum( int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" .PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);



function sumALL(array $values)
{
    $total = 0;
    foreach ($values as $values) {
        $total += $values;
    }
    echo "Total" .implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumALL(1, 2, 3, 4);
sumALL(...[10, 20, 30, 40]);