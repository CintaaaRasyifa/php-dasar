<?php

$names = ["Opon", "Rahmaliya", "Dipon"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

$person = [
    "first_name" => "Opon",
    "middle_name" => "Rahmaliya",
    "last_name" => "Syifa"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}