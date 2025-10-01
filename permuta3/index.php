<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Tarefas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <div class="content-wrapper p-4">
        <h2>Gestor de Tarefas</h2>

        <!-- Formulário -->
        <div class="card mb-3">
            <div class="card-body">
                <form id="novo-form">
                    <div class="mb-2">
                        <input type="text" name="titulo" class="form-control" placeholder="Título da Tarefa" required>
                    </div>
                    <div class="mb-2">
                        <textarea name="descricao" class="form-control" placeholder="Detalhes da Tarefa"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </form>
            </div>
        </div>

        <!-- Tarefas -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered" id="tabela-tarefas">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Tarefas carregadas via Ajax -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script>
$(function(){

    function atualizarLista(){
        $.get('acoes.php', {operacao: 'mostrar'}, function(data){
            $('#tabela-tarefas tbody').html(data);
        });
    }

    atualizarLista();

    $('#novo-form').submit(function(e){
        e.preventDefault();
        $.post('acoes.php', $(this).serialize() + '&operacao=criar', function(){
            $('#novo-form')[0].reset();
            atualizarLista();
        });
    });

    $(document).on('click', '.btn-finalizar', function(){
        let id = $(this).data('id');
        $.post('acoes.php', {operacao: 'finalizar', id: id}, function(){
            atualizarLista();
        });
    });

    $(document).on('click', '.btn-remover', function(){
        if(confirm('Confirma exclusão da tarefa?')){
            let id = $(this).data('id');
            $.post('acoes.php', {operacao: 'remover', id: id}, function(){
                atualizarLista();
            });
        }
    });

});
</script>
</body>
</html>