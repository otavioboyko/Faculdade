<?php
require 'vendor/autoload.php';

try {
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $db = $client->projeto_escola;
} catch (Exception $e) {
    die("Erro ao conectar: " . $e->getMessage());
}
?>
