<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Busca</title>
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <nav class="nav">
  <a class="nav-link active" href="cadastrar.php">Inserir Produtos</a>
  <a class="nav-link" href="login.php">Consultar Produtos</a>
  <a class="nav-link" href="index.php">Consulta por Nome</a>
  <a class="nav-link" href="index.php">Cadastrar Clientes</a>
  <a class="nav-link" href="usuarios.php">Consultar Clientes</a>
</nav>
</div>
  </div>
</nav>
</head>
<body>
<div class="container">
    <h1>Cadastrar Produtos</h1>
    <form action="" method="POST">
            <p>
                Código de Barra  <input type="text" name="codigo" id="codigo" placeholder="Codigo de Barra" />
            </p>
            <p>
                Nome do Produto <input type="text" name="nome" id="nome"  placeholder="Nome do Produto" />
            </p>
            <p>
                Valor do Produto <input type="text" name="valor" id="valor" placeholder="Valor do Produto" />
            </p>
            <p>
                Descrição <input type="text" name="descricao" id="descricao"  placeholder="Descrição" />
            </p>
            <p>
                <input type="submit" id="submit" value="Enviar" />
            </p>
        </form>
    <br>
</div>
</body>
</html> 
<?php

include_once('conexao.php');

 if(isset($_POST['submit']))
 {
     $codigo = $_POST['codigo'];
     $nome = $_POST['nome'];
     $valor = $_POST['valor'];
     $descricao = $_POST['descricao'];

     
     $result = mysqli_query($mysqli , "INSERT INTO consoles (idProduto, nomeProduto, valorProduto, descricaoProduto) 
     VALUES ('$codigo', '$nome', '$valor', '$descricao' )");
     

 }
 ?>