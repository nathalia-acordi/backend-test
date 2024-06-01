<!DOCTYPE html>
<html>
<head>
    <title>Contatos</title>
</head>
<body>
    <h1>Lista de Contatos</h1>
    <a href="?controller=contato&action=create">Adicionar Contato</a>
    <table>
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Pessoa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contatos as $contato): ?>
                <tr>
                    <td><?= $contato->getTipo(); ?></td>
                    <td><?= $contato->getDescricao(); ?></td>
                    <td><?= $contato->getPessoa()->getNome(); ?></td>
                    <td>
                        <a href="?controller=contato&action=edit&id=<?= $contato->getId(); ?>">Editar</a>
                        <a href="?controller=contato&action=delete&id=<?= $contato->getId(); ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
