<!DOCTYPE html>
<html>
	<head>
		<title>Projeto 2019</title>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="./css/bootstrap_css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script src="./js/jquery.3.3.1.slim.min.js"></script>
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap_css/bootstrap.min.js"></script>


		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script type="text/javascript" src="js/funcoes.js"></script>

	</head>
	<body>

		<div id="cabecalho">
		<h1>Siga-me os bons!</h1>

		<p>Seja bem vindo</p>

		<ul>
			<li><a href="?pg=inicio">Início</a></li>
			<li><a href="?pg=sobre">Sobre</a></li>
			<li><a href="?pg=cadastro">Cadastro</a></li>
		</ul>
	</div>

	<div id="corpo">
		<?php
		if(isset($_GET["pg"])){
			$pagina = $_GET["pg"];
		}else{
			$pagina = "inicio";

		}
			include("paginas/".$pagina.".php");	
		
		?>

	</div>

	</body>
</html>