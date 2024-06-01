<!DOCTYPE html>
<html>
<head>
    <title>Editar Contato</title>
</head>
<body>
    <h1>Editar Contato</h1>
    <form method="POST" action="?controller=contato&action=edit&id=<?= $contato->getId(); ?>">
        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
            <option value="Telefone" <?= $contato->getTipo() == 'Telefone' ? 'selected' : ''; ?>>Telefone</option>
            <option value="Email" <?= $contato->getTipo() == 'Email' ? 'selected' : ''; ?>>Email</option>
        </select>
        <br>
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" value="<?= $contato->getDescricao(); ?>" required>
        <br>
        <label for="pessoa_id">Pessoa:</label>
        <select id="pessoa_id" name="pessoa_id" required>
            <?php foreach ($pessoas as $pessoa): ?>
                <option value="<?= $pessoa->getId(); ?>" <?= $contato->getPessoa()->getId() == $pessoa->getId() ? 'selected' : ''; ?>><?= $pessoa->getNome(); ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
