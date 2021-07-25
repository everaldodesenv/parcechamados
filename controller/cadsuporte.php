<?php  

include('../controller/conexao.php');

$profissao      = $_POST["profissao"];
$nome           = $_POST["nome"];
$celular        = $_POST["celular"];
$dtcadastro     = $_POST["dtcadastro"];



$grava_suporte ="INSERT INTO pc_suporte (sup_Nome,sup_Dtcadastro,sup_Profissao,sup_Celular)VALUES('$nome','$dtcadastro','$profissao','$celular')";

if(mysqli_query($mysqli, $grava_suporte)){
    echo "<h1>Cliente suporte com sucesso!</h1></br>";
}else{
    echo "Erro:".$grava_suporte."</br>".mysqli_error($mysqli);
}
mysqli_close($mysqli);


?>