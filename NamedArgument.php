<?php

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}


sayHello("Restu", "Bagaskara", "Alam");
// sayHello("Restu", "Alam"); // error

sayHello(last: "Alam", first: "Restu", middle: "Bagaskara");
sayHello(first: "Restu", last: "Alam");