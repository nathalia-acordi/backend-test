<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

// replace with path to your own project bootstrap file
$em = require_once(__DIR__ . '/../app/Config/database.php');

ConsoleRunner::run(
    new SingleManagerProvider($em)
);