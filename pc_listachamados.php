<?php include_once('controller/conexao.php');

   $consulta ="SELECT * FROM pc_chamado";
   $con = $mysqli->query($consulta) or die($mysqli->error); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Chamados</title>
</head>
<body>
    <h1>Lista de Chamados</h1>
    <table border="1">
        <tr>
            <td>Numero do Chamado</td>
            <td>Data abertura</td>
            <td>situacao</td>
            <td>suporte</td>
            <td>Ação</td>
        </tr>
        <?php while($dado = $con->fetch_array()){?>
        <tr>
            <td><?php echo $dado["cha_Id"];?></td>
            <td><?php echo date("d/m/Y",strtotime($dado["cha_DtAbertura"]));?></td>
            <td><?php echo $dado["cha_Situacao"];?></td>
            <td><?php echo $dado["sup_Id"];?></td>
            <td><a href="cha_editar.php?codigo=<?php echo $dado["cha_Id"];?>">Editar</a> |
                 <a href="cha_excluir.php?codigo=<?php echo $dado["cha_Id"];?>">Excluir</a></td>
        </tr>
        <?php }?>
    </table>



</body>
</html>