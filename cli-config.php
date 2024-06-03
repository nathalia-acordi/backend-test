<?php

require_once "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

$paths = [
    __DIR__ . '/app/Model/Pessoa.php',
    __DIR__ . '/app/Model/Contato.php'
];
$isDevMode = true;

$dotenv = parse_ini_file(__DIR__ . '/.env');

$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);

$conn = [
    'driver' => $dotenv['DB_DRIVER'],
    'host' => $dotenv['DB_HOST'],
    'dbname' => $dotenv['DB_NAME'],
    'user' => $dotenv['DB_USER'],
    'password' => $dotenv['DB_PASS'],
    'port' => $dotenv['DB_PORT']
];

$connection = DriverManager::getConnection($conn, $config);
$entityManager = new EntityManager($connection, $config);

return $entityManager;
