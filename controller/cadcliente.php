<?php  

include('../controller/conexao.php');

$nome           = $_POST["nome"];
$razaosocial    = $_POST["razaosocial"];
$cnpj           = $_POST["cnpj"];
$inscEstadual   = $_POST["inscEstadual"];
$rua            = $_POST["rua"];
$numero         = $_POST["numero"];
$bairro         = $_POST["bairro"];
$cidade         = $_POST["cidade"];
$cep            = $_POST["cep"];
$fone1          = $_POST["fone1"];
$fone2          = $_POST["fone2"];
$celular        = $_POST["celular"];
$email          = $_POST["email"];
$dtcadastro     = $_POST["dtcadastro"];
$produto        = $_POST["produto"];

$grava_cliente ="INSERT INTO pc_cliente (cli_Nome,cli_RazaoSocial,cli_Cnpj,cli_Ie,cli_Rua,cli_Numero,Cli_Bairro,cli_Cidade,cli_Cep,cli_Fone1,cli_Fone2,cli_Celular,cli_Email,cli_Dtcadastro,cli_Produto)VALUES('$nome','$razaosocial','$cnpj','$inscEstadual','$rua','$numero','$bairro','$cidade','$cep','$fone1','$fone2','$celular','$email','$dtcadastro','$produto')";

if(mysqli_query($mysqli, $grava_cliente)){
    echo "<h1>Cliente cadastrado com sucesso!</h1></br>";
}else{
    echo "Erro:".$grava_cliente."</br>".mysqli_error($mysqli);
}
mysqli_close($mysqli);


?>