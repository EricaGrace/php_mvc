<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Symfony\Component\Console\Application;
use Console\UserCommand;

$app = new Application();
$app -> add(new UserCommand());
$app -> run();