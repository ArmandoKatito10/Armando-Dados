<?php
$bd_servidor = '127.0.0.1';
$bd_banco    = 'tarefas';
$be_user     = 'root';
$bd_senha    = '';

$conexao = mysqli_connect($bd_servidor,$be_user,$bd_senha,$bd_banco);

if (mysqli_connect_errno($conexao)) {
    echo "Problemas ao conectar-se. Dados incorrectos!";
    die();
    }

function buscar_tarefas($conexao)
{
$sqlBusca= 'SELECT * FROM tarefa';
$resultado = mysqli_query($conexao,$sqlBusca);
$tarefas = array();
while($tarefa = mysqli_fetch_assoc($resultado)) {
$tarefas[] = $tarefa;
}
return $tarefas;
}



function gravar_tarefa($conexao, $tarefa)
{
$sqlGravar = "INSERT INTO tarefa
(nome, descricao, prioridade, prazo,concluida)
VALUES
(
'{$tarefa['nome']}',
'{$tarefa['Descricao']}',
'{$tarefa['prioridade']}',
'{$tarefa['Prazo']}',
'{$tarefa['concluida']}'

)";
mysqli_query($conexao, $sqlGravar);
}

function buscar_tarefa($conexao, $id){
    $sqlBusca = "SELECT nome, descricao, prioridade, prazo,concluida
     FROM tarefa   WHERE id = ".$id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function editar_tarefa($conexao, $tarefa){
$sql = " UPDATE tarefa SET 
        id='{$tarefa['id']}',
        nome='{$tarefa['nome']}',
        Descricao='{$tarefa['Descricao']}',
        prioridade='{$tarefa['prioridade']}',
        prazo='{$tarefa['Prazo']}',
        concluida='{$tarefa['concluida']}'
WHERE id = {$tarefa['id']}";

mysqli_query($conexao, $Editar);
}




?>