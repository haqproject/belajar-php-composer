<?php

require_once __DIR__ . "/vendor/autoload.php";

use HaqProject\Belajar\Customer;

$customer = new Customer("Naufal");
echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Arinal") . PHP_EOL;

