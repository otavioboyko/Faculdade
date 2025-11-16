<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema Escolas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h1 class="mb-4">Sistema Escolar (PHP + MongoDB)</h1>

    <a href="cadastrar_estudante.php" class="btn btn-primary mb-2">Cadastrar Estudante</a><br>
    <a href="listar_estudantes.php" class="btn btn-secondary mb-2">Listar Estudantes</a><br>
    <a href="cadastrar_curso.php" class="btn btn-success mb-2">Cadastrar Curso</a><br>
    <a href="listar_cursos.php" class="btn btn-warning mb-2">Listar Cursos</a><br>
</body>
</html>
