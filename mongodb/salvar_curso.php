<?php
include 'database.php';

$cursos = $db->cursos;

$documento = [
    'nome' => $_POST['nome'],
    'carga' => $_POST['carga'],
    'categoria' => $_POST['categoria'],
    'descricao' => $_POST['descricao'],
    'professor' => $_POST['professor'],
    'estudantes' => []
];

$cursos->insertOne($documento);
header("Location: listar_cursos.php");
?>
