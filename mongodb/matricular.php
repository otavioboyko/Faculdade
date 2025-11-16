<?php
include 'database.php';
$estudante = $db->estudantes->findOne(['_id' => new MongoDB\BSON\ObjectId($_GET['id'])]);
$cursos = $db->cursos->find();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Matricular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<h2>Matricular: <?= $estudante['nome'] ?></h2>
<form method="POST" action="salvar_matricula.php" class="row g-3">
    <input type="hidden" name="id_estudante" value="<?= $estudante['_id'] ?>">
    <div class="col-md-12">
        <label>Selecione o curso</label>
        <select name="curso_id" class="form-control" required>
            <?php foreach ($cursos as $c): ?>
                <option value="<?= $c['_id'] ?>"><?= $c['nome'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button class="btn btn-success mt-3">Matricular</button>
</form>
</body>
</html>
