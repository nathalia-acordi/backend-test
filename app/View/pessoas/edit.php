<!DOCTYPE html>
<html>
<head>
    <title>Editar Pessoa</title>
</head>
<body>
    <h1>Editar Pessoa</h1>
    <form method="POST" action="?controller=pessoa&action=update">
        <input type="hidden" name="id" value="<?= $pessoa->getId(); ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $pessoa->getNome(); ?>" required>
        <br>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" value="<?= $pessoa->getCpf(); ?>" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
