<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IgaraTeca</title>
	
	<link rel="stylesheet" type="text/css" @media="screen and (max-width: 400px)" href="css/pequeno.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript">
		$(function(){
			$('.slide ul').cycle({
				fx: 'fade',
				speed: 3000,
				timeout: 2500,
				prev:'.anterior',
				next:'.proxima',
			});
			$('div.slide').hover(function(){
				$('section.botao').fadeIn();},
				function(){
					$('section.botao').fadeOut();
			});
		});
	</script>
</head>
<body>
	<a href="index.php"><img src="img/logo.png" id="logotipo" class="animated bounceInLeft"></a>
	
	<div class="home">
		<p><center><ul>
			<strong>

				<a type="button" class="menu" href="index.php">Início</a>
				<a type="button" class="menu" href="php/cadLivros.php">Livros</a>
				<a type="button" class="menu" href="php/funcionalidades.php">Funcionalidades</a>
			    <a type="button" class="menu" href="php/sobre.php">Sobre</a>
				<a type="button" class="menu" href="php/desenvolvedores.php">Desenvolvedores</a>
				<?php
				if(isset($_SESSION['usuario'])){
				echo '<a type="button" class="menu" id="red" href="php/logout.php">Sair</a>';
				}
				else{
					echo '<a type="button" class="menu" href="php/registro.php">Registrar-se</a>', PHP_EOL;
					echo '<a type="button" class="menu" href="php/login.php">Login</a>';
				}	
				?>
			
			</strong>
		</ul></center></p>
	
	</div><br>

	<center>
		<p class="destaque">Livros em destaque</p>
		<div class="slide">
			<section class="botao">
				<a href="#" class="anterior" style="font-size: 40px;">&laquo;</a>
				<a herf="#" class="proxima" style="font-size: 40px;">&raquo;</a>
			</section>
			<ul>
				<li><img src="img/hitman.jpg" width="300" height="350" position="center"></li>
				<li><img src="img/gramatica.jpg" width="300" height="350" position="center"></li>
				<li><img src="img/ocortico.jpg" width="300" height="350" position="center"></li>
			</ul>
		</div>
	</center>

	<div class="copyright">
	<p>©Copyright 2018</p>
	</div>
</body>
</html>