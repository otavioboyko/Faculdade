<?php
$servidor = 'localhost';
$banco = 'lista_tarefas_db';
$usuario = 'root';
$senha = '';
$charset = 'utf8mb4';

$dns = "mysql:host=$servidor;dbname=$banco;charset=$charset";

$opcoes = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dns, $usuario, $senha, $opcoes);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco: " . $e->getMessage());
}
?>