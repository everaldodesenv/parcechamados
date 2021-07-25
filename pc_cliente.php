
<?php include_once('controller/conexao.php'); ?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cadastro de Clientes</title>
    


</head>

<body>
    <h1 class="titulo">Cadastro de Clientes</h1>
    <section>

        <form class="telas" action="./controller/cadcliente.php" method="POST">



            <div class="razaosocial">
                <h3>Dados principais</h3>
                <input placeholder="Digite o nome fantasia" name="nome" class="campo" type="text" tabindex="1" required autofocus>

                <input placeholder="Digite a Razao Social" name="razaosocial" class="campo" type="text" tabindex="2" required>

                <input placeholder="Digite o Cnpj" name="cnpj" class="campo" type="number" tabindex="3" required>

                <input placeholder="Digite a Inscrição Estatual" name="inscEstadual" class="campo" type="number" tabindex="4" required>
            </div>
            <div class="endereco">
                <h3>Endereço</h3>
                <input placeholder="Rua" name="rua" class="campo" type="text" tabindex="5">

                <input placeholder="Número" name="numero" class="campo" type="number" tabindex="6">

                <input placeholder="Bairro" name="bairro" class="campo" type="text" tabindex="7">

                <input placeholder="Cidade" name="cidade" class="campo" type="text" tabindex="8">

                <input placeholder="CEP" name="cep" class="campo" type="text" tabindex="9">
            </div>
            <div class="contato">
                <h3>Contato</h3>
                <input placeholder="Fone1" name="fone1" class="campo" type="number" tabindex="10">

                <input placeholder="Fone2" name="fone2" class="campo" type="number" tabindex="11">

                <input placeholder="Celular" name="celular" class="campo" type="number" tabindex="12">

                <input placeholder="e-mail" name="email" class="campo" type="email" tabindex="13">
            </div>
            <div class="produto">
                <h3>Produto da Parce</h3>
                <input placeholder="Data de cadastro" name="dtcadastro" class="campo" type="date" tabindex="14">

                <input placeholder="Produto Parce" name="produto" class="campo" type="text" tabindex="15">
            </div>
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