<?php 
      include_once('controller/conexao.php');

     
    

    ?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cadastro de Chamados</title>


</head>

<body>
    <h1 class="titulo">Cadastro de Chamados</h1>
    <section>

        <form class="telas" action="./controller/cadchamado.php" method="POST">



            
                <h3>Dados Chamado</h3>

     
         
         
         <select placeholder="Loja"name="codcli" class="campo">
            <option>Selecione</option>
              <?php
                $resultado_categoria = "SELECT * FROM pc_cliente";
                $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
                while($row_categorias = mysqli_fetch_assoc($resultcategoria)){ ?>
                  <option value="<?php echo $row_categorias['cli_Cnpj']?>">
                    <?php echo $row_categorias['cli_Nome']; ?>
                  </option> <?php
                }
              ?>
          </select></br>

         <select placeholder="Usuario"name="usuario" class="campo" tabindex='0'>
            <option>Selecione</option>
              <?php
                $resultado_categoria = "SELECT * FROM pc_usuario ORDER BY usu_Nome ASC";
                $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
                while($row_categorias = mysqli_fetch_assoc($resultcategoria)){ ?>
                  <option value="<?php echo $row_categorias['usu_Id']?>">
                    <?php echo $row_categorias['usu_Nome']; ?>
                  </option> <?php
                }
              ?>
          </select></br>



          <select placeholder="Suporte"name="suporte" class="campo" tabindex='0'>
            <option>Selecione</option>
              <?php
                $resultado_categoria = "SELECT * FROM pc_suporte ORDER BY sup_Nome ASC";
                $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
                while($row_categorias = mysqli_fetch_assoc($resultcategoria)){ ?>
                  <option value="<?php echo $row_categorias['sup_Id']?>">
                    <?php echo $row_categorias['sup_Nome']; ?>
                  </option> <?php
                }
              ?>
          </select></br>

          <select placeholder="Classificação do chamado"name="classificacao" class="campo" tabindex='0'>
            <option>Selecione</option>
              <?php
                $resultado_categoria = "SELECT * FROM pc_classificacao ORDER BY cla_Id ASC";
                $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
                while($row_categorias = mysqli_fetch_assoc($resultcategoria)){ ?>
                  <option value="<?php echo $row_categorias['cla_Id']?>">
                    <?php echo $row_categorias['cla_Tipo']; ?>
                  </option> <?php
                }
              ?>
          </select></br>
               
                <input placeholder="Situação" name="situacao" class="campo" type="text" tabindex="2">
                <input placeholder="Data Abertura" name="dtabertura" class="campo" type="date" tabindex="3">
                <input placeholder="Hora Abertura" name="hrabertura" class="campo" type="time" tabindex="3">
                <input placeholder="Data Fechamento" name="dtfechamento" class="campo" type="date" tabindex="3">
                <input placeholder="Hora Fechamento" name="hrfechamento" class="campo" type="time" tabindex="3">
                <textarea placeholder="Digite o Problema" name="problema"  cols="30" rows="10"></textarea>
                <textarea placeholder="Digite a Solução" name="solucao"  cols="30" rows="10"></textarea>
               
                
                
       
            <div>
                <input class="botao" type="submit" value="Cadastrar">
            </div>
        </form>


    </section>

    <footer class="rodape">
        <p> <strong>Parce Solucões</strong></p>
    </footer>
</body>

</html>