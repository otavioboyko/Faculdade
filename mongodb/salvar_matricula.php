<?php
include 'database.php';

$estudanteId = new MongoDB\BSON\ObjectId($_POST['id_estudante']);
$cursoId = new MongoDB\BSON\ObjectId($_POST['curso_id']);

// Atualiza estudante
$db->estudantes->updateOne(
    ['_id' => $estudanteId],
    ['$push' => ['cursos' => (string)$cursoId]]
);

// Atualiza curso
$db->cursos->updateOne(
    ['_id' => $cursoId],
    ['$push' => ['estudantes' => (string)$estudanteId]]
);

header("Location: listar_estudantes.php");
?>
