<!DOCTYPE html>
<html>
<head>
	<title>Analisador Léxico</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Analisador Léxico</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Arquivo <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Abrir</a></li>
				            <li><a href="#">Salvar</a></li>
				          </ul>
				        </li>
					</ul>
				</div>
			</nav>

			<form role="form" action="index.php" method="get">
			    <div class="form-group">
			  		<label for="email">Código:</label>
			    	<textarea class="form-control" rows="10" name="codigo-fonte"></textarea>
			    </div>
			    <input type="submit" class="btn btn-primary" value="Executar">
			</form>

			<?php

			include("listaAnaliseLexica.php");

			include("listaErrosLexicos.php");
			?>

		</div>
	</div>
</div>

</body>
</html>