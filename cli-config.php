<?php

require_once "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

$paths = ['C:\Users\natha\OneDrive\Área de Trabalho\prova-pratica\agenda\app\Model\Pessoa.php', 'C:\Users\natha\OneDrive\Área de Trabalho\prova-pratica\agenda\app\Model\Contato.php'];
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