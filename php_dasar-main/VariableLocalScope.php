<?php

function createName()
{
    $name = "cinta"; // local scope
}

createName();
echo $name . PHP_EOL;
