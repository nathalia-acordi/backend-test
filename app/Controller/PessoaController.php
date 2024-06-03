<?php

namespace App\Controller;

use App\Model\Pessoa;
use Doctrine\ORM\EntityManager;

class PessoaController
{
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (require_once($_SERVER['DOCUMENT_ROOT'] . '\app\Config\database.php'));
    }

    public function index()
    {
        $pessoas = $this->entityManager->getRepository(Pessoa::class)->createQueryBuilder('p')
            ->where('p.nome LIKE :nome')
            ->setParameter('nome', '%' . $_GET['name'] . '%')
            ->getQuery()
            ->getResult();

        require_once __DIR__ . '/../View/pessoas/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];

            $pessoa = new Pessoa();
            $pessoa->setNome($nome);
            $pessoa->setCpf($cpf);

            $this->entityManager->persist($pessoa);
            $this->entityManager->flush();

            header('Location: /?controller=pessoa&action=index');
        } else {
            require_once __DIR__ . '/../View/pessoas/create.php';
        }
    }

    public function edit()
    {
        $id = $_GET['id'];
        $pessoa = $this->entityManager->find(Pessoa::class, $id);

        if (!$pessoa) {
            die('Pessoa não encontrada');
        }

        require_once __DIR__ . '/../View/pessoas/edit.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $pessoa = $this->entityManager->find(Pessoa::class, $id);

        if (!$pessoa) {
            die('Pessoa não encontrada!');
        }

        $pessoa->setNome($_POST['nome']);
        $pessoa->setCpf($_POST['cpf']);

        $this->entityManager->flush();

        header('Location: /?controller=pessoa&action=index');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $pessoa = $this->entityManager->find(Pessoa::class, $id);

        if ($pessoa) {
            $this->entityManager->remove($pessoa);
            $this->entityManager->flush();
        }

        header('Location: /?controller=pessoa&action=index');
    }
}
