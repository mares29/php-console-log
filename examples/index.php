<?php

use Mares29\Console\Console as Console;

require_once "../src/Console.php";

$array = ["test" => ["apple", "MS"]];

Console::log($array);

$class = new DateTime();

Console::log("class", $class);
