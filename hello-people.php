<?php

require_once __DIR__ . "/vendor/autoload.php";

use HaqProject\Data\People;

$people = new People("Naufal");

echo $people->sayHello("Arinal");