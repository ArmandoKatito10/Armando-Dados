<?php

require_once 'banco.php';

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header("Location:index.php");
    exit();
} 

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']); 

$sqlBuscar = "select nome, usuario, senha from usuarios where usuario ='$usuario' and senha ='$senha' ";
$query    = mysqli_query($conexao, $sqlBuscar);
$linhas   = mysqli_affected_rows($conexao);

if ($linhas > 0) {
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome'] = $nome;
    header("Location:home.php");
    exit();
}
if(($_POST['usuario'])<>($_POST['senha'])){
    $_SESSION['Erro aos dados'] = true;
    header("Location:index.php");
    exit();
}
mysqli_close($conexao);


?>