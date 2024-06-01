<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

$paths = ['C:/Users/natha/OneDrive/Área de Trabalho/prova-pratica/agenda/app/Model'];
$isDevMode = true;


$dotenv = parse_ini_file('C:\Users\natha\OneDrive\Área de Trabalho\prova-pratica\agenda\.env');

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