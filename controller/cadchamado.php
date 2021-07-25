<?php  

include('../controller/conexao.php');

$codcli         = $_POST["codcli"];
$usuario        = $_POST["usuario"];
$suporte        = $_POST["suporte"];
$classificacao  = $_POST["classificacao"];
$situacao       = 'Em Aberto';
$dtabertura     = $_POST["dtabertura"];
//$hrabertura     = $_POST["hrabertura"];
$problema       = $_POST["problema"];
//$solucao        = $_POST["solucao"];




$grava_suporte ="INSERT INTO pc_chamado (cli_Id,usu_Id,sup_Id,cha_Classificacao,cha_Situacao,cha_DtAbertura,cha_Problema)VALUES('$codcli','$usuario','$suporte','$classificacao','$situacao','$dtabertura','$problema')";

if(mysqli_query($mysqli, $grava_suporte)){
    echo "<h1>Chamado registrado com sucesso!</h1></br>";
}else{
    echo "Erro:".$grava_suporte."</br>".mysqli_error($mysqli);
}
mysqli_close($mysqli);


?>