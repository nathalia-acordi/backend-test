<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

$pathToEnv = $_SERVER['DOCUMENT_ROOT'] . '\.env';
$pathToModel = $_SERVER['DOCUMENT_ROOT'] . '\app\Config\database.php';
$paths = [$pathToModel];
$isDevMode = true;

$dotenv = parse_ini_file($pathToEnv);

$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);

$conn = array(
    'driver' => $dotenv['DB_DRIVER'],
    'host' => $dotenv['DB_HOST'],
    'dbname' => $dotenv['DB_NAME'],
    'user' => $dotenv['DB_USER'],
    'password' => $dotenv['DB_PASS'],
    'port' => $dotenv['DB_PORT']
);

$connection = DriverManager::getConnection($conn, $config);
return $entityManager = new EntityManager($connection, $config);
