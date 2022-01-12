<?php

require_once __DIR__ . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("HaqProject");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("Naufal Arinal Haq");
$log->info("Selamat Belajar Composer");