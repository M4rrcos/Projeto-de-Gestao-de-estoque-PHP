<?php

include 'conexao.php';

 $id = $_POST ['id'];

 ///$nroproduto = $_POST['nroproduto'];
 $nomeproduto = $_POST['nomeproduto'];
 $Categoria = $_POST['categoria'];
 $Quantidade = $_POST['quantidade'];
 $fornecedor = $_POST['fornecedor'];

//$sql = "";

 //$sql = "update'estoque' set `nomeproduto`= `$nomeproduto`,`categoria`=`$Categoria`,`quantidade`='$Quantidade', `fornecedor` = '$fornecedor' where id_estoque = $id";


$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`Categoria`='$Categoria',`quantidade`='$Quantidade',`fornecedor`='$fornecedor' WHERE id_estoque = $id";


$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">Inicio</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="cadastrar_produto.php">Cadastrar Produto<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listar_produto.php">Listar Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




<center>
<div class="jumbotron">
  <h1 class="display-4">Atualizado com Sucesso !!!</h1>

  <p class="lead">Esta Pagina Serve para voltar na edição das colunas e mudar seu conteudo.</p>
  <hr class="my-4">
<h3>Atualizado com Sucesso!!</h3>
	<div style="margin-top: 10px" >
	<a href="listar_produto.php" class="btn btn-warning btn-lg" style="color: #fff">Voltar</a>
</div>

	<br>
<div class="contaner" style="width: 400px">
   
	
</div>
</center>
</div>








