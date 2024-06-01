<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\PessoaController;
use App\Controller\ContatoController;

$action = $_GET['action'] ?? 'index';
$controller = $_GET['controller'] ?? 'pessoa';

switch ($controller) {
    case 'pessoa':
        $pessoaController = new PessoaController();
        $pessoaController->$action();
        break;
    case 'contato':
        $contatoController = new ContatoController();
        $contatoController->$action();
        break;
    default:
        echo "Controller não encontrado!";
        break;
}
