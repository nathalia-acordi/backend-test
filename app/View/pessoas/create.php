<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Pessoa</title>
</head>
<body>
    <h1>Adicionar Pessoa</h1>
    <form method="POST" action="?controller=pessoa&action=create">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
