<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Cinta", "  Rahmaliya", "Syifa"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));

$Cinta = array(
    "id" => "Cinta",
    "name" => "Cinta  Rahmaliya",
    "age" => 16,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($Cinta);

var_dump($Cinta["name"]);
var_dump($Cinta["address"]["country"]);

$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($budi);