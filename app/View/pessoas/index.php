<!DOCTYPE html>
<html>
<head>
    <title>Pessoas</title>
</head>
<body>
    <h1>Lista de Pessoas</h1>
    <a href="?controller=pessoa&action=create">Adicionar Pessoa</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pessoas as $pessoa): ?>
                <tr>
                    <td><?= $pessoa->getNome(); ?></td>
                    <td><?= $pessoa->getCpf(); ?></td>
                    <td>
                        <a href="?controller=pessoa&action=edit&id=<?= $pessoa->getId(); ?>">Editar</a>
                        <a href="?controller=pessoa&action=delete&id=<?= $pessoa->getId(); ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
