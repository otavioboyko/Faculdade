<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<h2>Cadastrar Curso</h2>
<form action="salvar_curso.php" method="POST" class="row g-3">
    <div class="col-md-6">
        <label>Nome do Curso</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="col-md-3">
        <label>Carga Horária</label>
        <input type="number" name="carga" class="form-control" required>
    </div>
    <div class="col-md-3">
        <label>Categoria</label>
        <input type="text" name="categoria" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label>Descrição</label>
        <textarea name="descricao" class="form-control"></textarea>
    </div>
    <div class="col-md-6">
        <label>Professor Responsável</label>
        <input type="text" name="professor" class="form-control" required>
    </div>

    <button class="btn btn-success mt-3">Salvar Curso</button>
</form>
</body>
</html>
