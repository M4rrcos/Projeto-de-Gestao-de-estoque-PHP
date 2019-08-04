<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		
		#tamanhoContainer{
			width: 500px;
		}

		#botao {
			background-color: #920498;  /*cor de fundoAC4CE4 */
			color:#ffffff;/*cor da letra */
			font-weight: bold;
		}


	</style>
</head>
<body>

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
        <a class="nav-link" href="home.php">Pagina de Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
 
  </div>
</nav>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<h4>Formulario de Cadastro</h4>
<form action="_inserir_produto.php" method="post" style="margin-top: 20px">

	<div class="form-group">
    <label>Nro Produto</label>

    <input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do Produto" required autocomplete="of">
 </div>
  	<div class="form-group">
      <label>Nome Produto</label>
       <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o numero do Produto" required autocomplete="of">
    </div>

      <div class="form-group">
         <label>Categoria</label>
           <select class="form-control"name="categoria" required autocomplete="of">
           <option>Perifericos</option>
           <option>Hardware</option>
           <option>Software</option>
           <option>Celulares</option>
        </select>
    </div>
  	     <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade do Produto" required autocomplete="of">
           </div>

    <div class="form-group">
          <label>fornecedor</label>
          <select class="form-control" name="fornecedor" required autocomplete="of">
           <option>Fornecedor A</option>
           <option>Fornecedor B</option>
           <option>Fornecedor C</option>
           <option>Fornecedor D</option>
          
    </select>
  </div>
  <div style="text-align: right;">
  <button type="submit" id="botao" class="btn">Cadastrar</button>

 </div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>