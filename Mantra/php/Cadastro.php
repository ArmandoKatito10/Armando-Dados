<?php

require_once 'banco.php';

$nome    = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha   = $_POST['senha'];

$sqlInserir = " INSERT INTO usuarios values (default, '$nome', '$usuario', '$senha')";
$query    = mysqli_query($conexao, $sqlInserir);
$linhas   = mysqli_affected_rows($conexao);

if ($linhas > 0) {
    echo "Cadastro efectuado com sucesso! ";
}
else {
    echo "Nome já existe";
}

?>