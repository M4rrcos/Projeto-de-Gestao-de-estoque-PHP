<?php

include 'conexao.php';

$id = $_GET ['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

$deletar = mysqli_query($conexao,$sql);


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<center>
<div class="jumbotron">
  <h1 class="display-4">Deletado com Sucesso !!!</h1>

  <p class="lead">Esta Pagina Serve para voltar na edição das colunas e deletar seu conteudo.</p>
  <hr class="my-4">
<h3>Deletado com Sucesso!!</h3>
	<div style="margin-top: 10px" >
	<a href="listar_produto.php" class="btn btn-warning btn-lg" style="color: #fff">Deletar</a>
</div>

	<br>
<div class="contaner" style="width: 400px">
	
</div>
</center>
</div>

