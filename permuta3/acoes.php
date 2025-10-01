<?php
require 'config.php';

$operacao = $_REQUEST['operacao'] ?? '';

if($operacao === 'criar'){
    $nomeTarefa = $_POST['titulo'] ?? '';
    $detalhes = $_POST['descricao'] ?? '';
    $query = $pdo->prepare("INSERT INTO tarefas (titulo, descricao) VALUES (?, ?)");
    $query->execute([$nomeTarefa, $detalhes]);

} elseif($operacao === 'mostrar') {
    $query = $pdo->query("SELECT * FROM tarefas ORDER BY created_at DESC");
    $lista = $query->fetchAll();
    foreach($lista as $item){
        $estado = $item['concluida'] ? '<span class="badge bg-success">Concluída</span>' : '<span class="badge bg-warning">Pendente</span>';
        $botaoFinalizar = $item['concluida'] ? '' : '<button class="btn btn-success btn-sm btn-finalizar" data-id="'.$item['id'].'"><i class="bi bi-check-lg"></i></button>';
        $botaoRemover = '<button class="btn btn-danger btn-sm btn-remover" data-id="'.$item['id'].'"><i class="bi bi-trash"></i></button>';

        echo "<tr>
                <td>{$item['titulo']}</td>
                <td>{$item['descricao']}</td>
                <td>$estado</td>
                <td>$botaoFinalizar $botaoRemover</td>
              </tr>";
    }

} elseif($operacao === 'finalizar'){
    $idTarefa = $_POST['id'];
    $stmt = $pdo->prepare("UPDATE tarefas SET concluida = 1 WHERE id = ?");
    $stmt->execute([$idTarefa]);

} elseif($operacao === 'remover'){
    $idTarefa = $_POST['id'];
    $stmt = $pdo->prepare("DELETE FROM tarefas WHERE id = ?");
    $stmt->execute([$idTarefa]);
}
?>