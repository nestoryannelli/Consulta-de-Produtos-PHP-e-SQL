<?php

require_once('conexao.php');
require_once('Xml.Class.php');

$xml = new Xml();


$xml->OpenTag("response");
?>
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
    <h1>Consulta Codigo de Barras</h1>
    <form action="">
        <input name="busca" placeholder="Digite o código de barras" type="text">
        <button type="submit">Pesquisar</button>
    </form>
    <br>
    <table>
        <tr>
             <th>Codigo de Barra</th>
            <th>Nome do Produto</th>
            <th>Valor do Produto</th>
            <th>Descrição</th>
            <th>Posição do Estoque</th>
        </tr>
    </table>
</div>
        <?php
        /** Pesquisa no BD */
        if (!isset($_GET['busca'])) {
            ?>
        <tr>
            <td colspan="3">Resultado da pesquisa...</td>
        </tr>
        <?php
        /** Buscar no campo de busca fabricante, modelo etc */
        } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * 
                FROM consoles
                WHERE idProduto LIKE '$pesquisa%'";
            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
        

               /**Validação,se a pesquisa não encontrou algum valor no BD */
            if ($sql_query->num_rows == 0) {
                ?>
            <tr>
                <td colspan="3">Nenhum resultado encontrado...</td>
            </tr>
            <?php
                  /**Validação,se a pesquisa encontrou no BD retorna valores */
            } else {
                while($dados = $sql_query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $dados['idProduto']; ?></td>
                        <td><?php echo $dados['nomeProduto']; ?></td>
                        <td><?php echo $dados['valorProduto']; ?></td>
                        <td><?php echo $dados['descricaoProduto']; ?></td>
                        <td><?php echo $dados['posicaoEstoque']; ?></td>
                     
                    </tr>
                    <?php
                }
            }
        }
        
            ?>
    </table>
</body>
</html> 