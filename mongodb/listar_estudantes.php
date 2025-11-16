<?php
include 'database.php';
$estudantes = $db->estudantes->find();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<h2>Estudantes cadastrados</h2>
<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($estudantes as $e): ?>
        <tr>
            <td><?= $e['nome'] ?></td>
            <td><?= $e['cpf'] ?></td>
            <td>
                <a href="matricular.php?id=<?= $e['_id'] ?>" class="btn btn-sm btn-success">Matricular em Curso</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
