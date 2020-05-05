<?php
function traduz_prioridade($codigo)
{
$prioridade = '';
switch ($codigo) {
    case 1:
        $prioridade = 'Baixa';
        break;
    case 2:
        $prioridade = 'Média';  
        break;
    case 3:
        $prioridade = 'Alta';
        break;

}
    return $prioridade;

}

function traduz_data_para_banco($data)
{
if ($data == " ") {
 return "";
}
$dados = explode(" / ", $data);
$data_mysql = "{$dados[0]}-{$dados[0]}-{$dados[0]}";
return $data_mysql;

}
function traduz_data_para_exibir($data){
    if ($data == "" OR $data == "0000-00-00") {
       return "";
    }
    $dados = explode("-", $data);
    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
    return $data_exibir;
    
}
function traduz_concluida($codigo2){
    $concluida = '';
    switch ($codigo2) {
        case 0:
           $concluida ='Não';
            break;
        case 1:
            $concluida = 'Sim';
            break;
    }
    return $concluida;
    
}

?>