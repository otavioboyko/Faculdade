<?php
include 'database.php';
$curso = $db->cursos->findOne(['_id' => new MongoDB\BSON\ObjectId($_GET['id'])]);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<h2>Curso: <?= $curso['nome'] ?></h2>
<p><b>Professor:</b> <?= $curso['professor'] ?></p>
<p><b>Carga Horária:</b> <?= $curso['carga'] ?></p>
<p><b>Categoria:</b> <?= $curso['categoria'] ?></p>
<p><b>Descrição:</b><br><?= $curso['descricao'] ?></p>

<h3 class="mt-4">Estudantes matriculados</h3>
<ul>
<?php
foreach ($curso['estudantes'] as $id) {
    $e = $db->estudantes->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
    echo "<li>{$e['nome']} ({$e['cpf']})</li>";
}
?>
</ul>
</body>
</html>
