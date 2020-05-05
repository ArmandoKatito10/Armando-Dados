<?php
session_start();

include "banco.php";
include "ajudantes.php";


$exibir_tabela = false;

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $tarefa = array();
    $id =$_GET['id'];
     $tarefa['nome'] = $_GET['nome'];
    
    if (isset($_GET['Descricao']))
     {
        $tarefa['Descricao'] = $_GET['Descricao'];
    }else {
        $tarefa['Descricao'] ='';
    }

    if (isset($_GET['Prazo'])) {
        $tarefa['prazo'] = ($_GET['Prazo']);
    }else {
        $tarefa['Prazo'] ='';
    }

    $tarefa['prioridade'] = $_GET['prioridade'];

    if (isset($_GET['concluida'])) {
    $tarefa['concluida'] = '1';
    }else {
        $tarefa['concluida'] = '0';
    }
    editar_tarefa($conexao, $tarefa);
    }
   $tarefa = buscar_tarefa($conexao, $id);

include "Template.php";

?>