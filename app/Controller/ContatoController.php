<?php

namespace App\Controller;

use App\Model\Contato;
use App\Model\Pessoa;
use Doctrine\ORM\EntityManager;

class ContatoController
{
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (require_once($_SERVER['DOCUMENT_ROOT'] . '\app\Config\database.php'));
    }

    public function index()
    {
        $contatos = $this->entityManager->getRepository(Contato::class)->findAll();
        require_once __DIR__ . '/../View/contatos/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipo = $_POST['tipo'];
            $descricao = $_POST['descricao'];
            $pessoaId = $_POST['pessoa_id'];

            $pessoa = $this->entityManager->find(Pessoa::class, $pessoaId);

            if (!$pessoa) {
                die('Pessoa não encontrada!');
            }

            $contato = new Contato();
            $contato->setTipo($tipo);
            $contato->setDescricao($descricao);
            $contato->setPessoa($pessoa);

            $this->entityManager->persist($contato);
            $this->entityManager->flush();

            header('Location: /?controller=contato&action=index');
        } else {
            $pessoas = $this->entityManager->getRepository(Pessoa::class)->findAll();
            require_once __DIR__ . '/../View/contatos/create.php';
        }
    }

    public function edit()
    {
        $id = $_GET['id'];
        $contato = $this->entityManager->find(Contato::class, $id);

        if (!$contato) {
            die('Contato não encontrado!');
        }

        $pessoas = $this->entityManager->getRepository(Pessoa::class)->findAll();
        require_once __DIR__ . '/../View/contatos/edit.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $contato = $this->entityManager->find(Contato::class, $id);

        if (!$contato) {
            die('Contato não encontrado!');
        }

        $contato->setTipo($_POST['tipo']);
        $contato->setDescricao($_POST['descricao']);

        $this->entityManager->flush();

        header('Location: /?controller=contato&action=index');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $contato = $this->entityManager->find(Contato::class, $id);

        if ($contato) {
            $this->entityManager->remove($contato);
            $this->entityManager->flush();
        }

        header('Location: /?controller=contato&action=index');
    }
}
