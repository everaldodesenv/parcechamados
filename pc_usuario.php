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
    <title>Cadastro de Usuarios</title>


</head>

<body>
    <h1 class="titulo">Cadastro de Usuarios</h1>
    <section>

        <form class="telas" action="./controller/cadusuario.php" method="POST">



            
                <h3>Dados Usuario</h3>

          
          <select placeholder="Loja do Usuario"name="codcli" class="campo">
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


                

                <input placeholder="Nome usuario" name="nome" class="campo" type="text" tabindex="1">

                <input placeholder="Celular" name="celular" class="campo" type="number" tabindex="2">

                <input placeholder="e-mail" name="email" class="campo" type="email" tabindex="3">
       
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