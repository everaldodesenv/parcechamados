<?php  

include('../controller/conexao.php');

$codcli         =$_POST["codcli"];
$nome           = $_POST["nome"];
$celular        = $_POST["celular"];
$email          = $_POST["email"];



$grava_usuario ="INSERT INTO pc_usuario (cli_Id,usu_Nome,usu_Email,usu_Celular)VALUES('$codcli','$nome','$celular','$email')";

if(mysqli_query($mysqli, $grava_usuario)){
    echo "<h1>Cliente usuario com sucesso!</h1></br>";
}else{
    echo "Erro:".$grava_usuario."</br>".mysqli_error($mysqli);
}
mysqli_close($mysqli);


?>