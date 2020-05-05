<?php
session_start();

include "banco.php";
include "ajudantes.php";

$exibir_tabela = true;

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $tarefa = array();
    $tarefa['nome'] = $_GET['nome'];
    if (isset($_GET['Descricao']))
     {
        $tarefa['Descricao'] = $_GET['Descricao'];
    }else {
        $tarefa['Descricao'] ='';
    }

    if (isset($_GET['Prazo'])) {
        $tarefa['Prazo'] = ($_GET['Prazo']);
    }else {
        $tarefa['Prazo'] ='';
    }

    $tarefa['prioridade'] = $_GET['prioridade'];

    if (isset($_GET['concluida'])) {
    $tarefa['concluida'] = '1';
    }else {
        $tarefa['concluida'] = '0';
    }
    gravar_tarefa($conexao, $tarefa);
    }
    $listar_tarefas = buscar_tarefas($conexao);

    $tarefa = array(
        'id' => 1,
        'nome' => '',
        'Descricao' => '',
        'Prazo' => '',
        'prioridade' => 1,
        'concluida' => ''
    );

include "Template.php";
?>




<!--Função que permite verificar e pôr os cadastros dentro do array usand a função Session para mater os dados-->
         