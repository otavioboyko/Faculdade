<?php
include 'database.php';
$cursos = $db->cursos->find();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<h2>Cursos cadastrados</h2>
<table class="table table-striped">
<tr>
    <th>Curso</th>
    <th>Professor</th>
    <th>Ações</th>
</tr>
<?php foreach ($cursos as $c): ?>
<tr>
    <td><?= $c['nome'] ?></td>
    <td><?= $c['professor'] ?></td>
    <td>
        <a href="ver_curso.php?id=<?= $c['_id'] ?>" class="btn btn-sm btn-info">Ver</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
