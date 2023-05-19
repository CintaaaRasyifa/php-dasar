<?php

$first = [
    "first_name" => "Cinta"
];

$last = [
    "first_name" => "Dipon",
    "last_name" => "Opon"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Cinta",
    "last_name" => "Opon"
];

$b = [
    "last_name" => "Opon",
    "first_name" => "Cinta"
];

var_dump($a == $b);
var_dump($a === $b);