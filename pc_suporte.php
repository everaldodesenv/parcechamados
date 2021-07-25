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
    <title>Cadastro de Suporte</title>


</head>

<body>
    <h1 class="titulo">Cadastro de Suporte</h1>
    <section>

        <form class="telas" action="./controller/cadsuporte.php" method="POST">



            
                <h3>Dados Suporte</h3>

          
          <select placeholder="Profissão"name="profissao" class="campo" tabindex='0'>
            <option>Selecione</option>
              <?php
                $resultado_categoria = "SELECT * FROM pc_suporte_prof ORDER BY prof_Profissao ASC";
                $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
                while($row_categorias = mysqli_fetch_assoc($resultcategoria)){ ?>
                  <option value="<?php echo $row_categorias['prof_Id']?>">
                    <?php echo $row_categorias['prof_Profissao']; ?>
                  </option> <?php
                }
              ?>
          </select></br>


                

                <input placeholder="Nome usuario" name="nome" class="campo" type="text" tabindex="1">
                <input placeholder="Celular" name="celular" class="campo" type="number" tabindex="2">
                <input placeholder="Data de cadastro" name="dtcadastro" class="campo" type="date" tabindex="3">
                
       
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