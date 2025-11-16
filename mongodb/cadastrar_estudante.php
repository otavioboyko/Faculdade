<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Estudante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<h2>Cadastrar Estudante</h2>
<form action="salvar_estudante.php" method="POST" class="row g-3">
    <div class="col-md-6">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="col-md-3">
        <label>RG</label>
        <input type="text" name="rg" class="form-control" required>
    </div>
    <div class="col-md-3">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control" required>
    </div>
    <div class="col-md-4">
        <label>Data de nascimento</label>
        <input type="date" name="nascimento" class="form-control" required>
    </div>
    <div class="col-md-4">
        <label>Telefone 1</label>
        <input type="text" name="tel1" class="form-control" required>
    </div>
    <div class="col-md-4">
        <label>Telefone 2</label>
        <input type="text" name="tel2" class="form-control">
    </div>
    <div class="col-md-6">
        <label>Nome da mãe</label>
        <input type="text" name="mae" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label>Nome do pai</label>
        <input type="text" name="pai" class="form-control">
    </div>

    <h3 class="mt-4">Endereço</h3>

    <div class="col-md-6">
        <label>Rua</label>
        <input type="text" name="rua" class="form-control" required>
    </div>
    <div class="col-md-2">
        <label>Número</label>
        <input type="text" name="numero" class="form-control" required>
    </div>
    <div class="col-md-4">
        <label>Bairro</label>
        <input type="text" name="bairro" class="form-control" required>
    </div>
    <div class="col-md-4">
        <label>Cidade</label>
        <input type="text" name="cidade" class="form-control" required>
    </div>
    <div class="col-md-4">
        <label>Estado</label>
        <input type="text" name="estado" class="form-control" required>
    </div>
    <div class="col-md-4">
        <label>CEP</label>
        <input type="text" name="cep" class="form-control" required>
    </div>

    <button class="btn btn-primary mt-3">Salvar</button>
</form>
</body>
</html>
