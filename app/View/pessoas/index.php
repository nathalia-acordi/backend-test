<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .container {
            width: 80%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .search {
            text-align: center;
            margin-bottom: 20px;
        }

        .search input {
            width: calc(100% - 40px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        .actions a {
            margin-right: 10px;
        }

        .adicionar-pessoa {
            display: block;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .ver-contato {
            display: block;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .add-contact {
            display: block;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Agenda</h1>
        <div class="search">
            <input type="text" id="search" pattern="[A-z]" value="<?= $_GET['name'] ?>" placeholder="Pesquisar por nome">
        </div>
        <a class="adicionar-pessoa" href="/?controller=pessoa&action=create">Adicionar pessoa</a>
        <a class="ver-contato" href="/?controller=contato&action=index">Listar contatos</a>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoas as $pessoa) : ?>
                    <tr>
                        <td><?= htmlspecialchars($pessoa->getNome()); ?></td>
                        <td><?= htmlspecialchars($pessoa->getCpf()); ?></td>
                        <td class="actions">
                            <a href="?controller=pessoa&action=edit&id=<?= $pessoa->getId(); ?>">Editar</a>
                            <a href="?controller=pessoa&action=delete&id=<?= $pessoa->getId(); ?>">Excluir</a>
                            <a href="?controller=contato&action=create&id=<?= $pessoa->getId(); ?>">Adicionar contato</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

<script type="text/javascript">
    function findByName() {
        const searchString = document.getElementById("search").value;
        window.location.search = `controller=pessoa&action=index&name=${searchString}`
    }

    document.getElementById("search").addEventListener('keyup', function(e) {
        var key = e.which || e.keyCode;
        if (key == 13) {
            findByName()
        }
    });
</script>

</html>