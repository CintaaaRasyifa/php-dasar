<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Opon");
$sayHello("Dipon");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Opon", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Opon", $filterFunction);

$firstName = "Opon";
$lastName = "Dipon";

$sayHelloOpon = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloOpon();

$firstName = "Dipon";
$lastName = "Forger";
$sayHelloOpon();
