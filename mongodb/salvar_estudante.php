<?php
include 'database.php';

$estudantes = $db->estudantes;

$documento = [
    'nome' => $_POST['nome'],
    'rg' => $_POST['rg'],
    'cpf' => $_POST['cpf'],
    'nascimento' => $_POST['nascimento'],
    'telefones' => [$_POST['tel1'], $_POST['tel2']],
    'mae' => $_POST['mae'],
    'pai' => $_POST['pai'],
    'endereco' => [
        'rua' => $_POST['rua'],
        'numero' => $_POST['numero'],
        'bairro' => $_POST['bairro'],
        'cidade' => $_POST['cidade'],
        'estado' => $_POST['estado'],
        'cep' => $_POST['cep']
    ],
    'cursos' => []
];

$estudantes->insertOne($documento);
header("Location: listar_estudantes.php");
?>
