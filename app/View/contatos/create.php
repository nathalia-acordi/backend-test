<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Contato</title>
</head>
<body>
    <h1>Adicionar Contato</h1>
    <form method="POST" action="?controller=contato&action=create">
        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
            <option value="Telefone">Telefone</option>
            <option value="Email">Email</option>
        </select>
        <br>
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" required>
        <br>
        <label for="pessoa_id">Pessoa:</label>
        <select id="pessoa_id" name="pessoa_id" required>
            <?php foreach ($pessoas as $pessoa): ?>
                <option value="<?= $pessoa->getId(); ?>"><?= $pessoa->getNome(); ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
