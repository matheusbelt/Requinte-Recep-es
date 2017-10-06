<html>
<head>
	<meta charset="UTF-8">
	<title>Requinte</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/jquery-3.1.1.min.js"></script>
</head>
<body>
	<div class="container-fluid header">
	<center>
		<div class="logo">
			<div class="decoracao"></div><img src="assets/img/logo-superior.png" alt="RR"><div class="decoracao"></div>
		</div>
		
	</center>
	</div> <!-- final do header e container-fluid -->
	<div class="container-fluid menu-background">
		<div class="container menu">
				<div class="col-md-3">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo-horizontal"><img src="assets/img/logo-horizontal.png" alt="Requinte Recepções"></a>
				</div>
				<div class="col-md-9">
					<nav class="navHeader">
						<ul class="menu-inicial nav nabar-nav">
							<a href="#eventos"><li>Eventos</li></a>
							<a href="#30anos-requinte"><li>Depoimentos</li></a>
							<a href="#catalogos"><li>Catálogo</li></a>
							<a href="#contato"><li>Contato</li></a>
						</ul>
					</nav><!-- fim da navbar -->
				</div>
		</div>
	</div><!--  fim do menu-background container-fluid -->
	<div class="sombra-menu"></div>

	 <!-- EVENTOS  -->
	<section class="eventos container-fluid" id="eventos">
		<div class="container">
			<h1 class="eventos-titulo titulo-section">Eventos</h1>
			<article class="casamento">
				<div class="col-md-6 img-left">
					<img src="" alt="">
				</div>
				<div class="col-md-6 texto-right casamento">
					<h2 class="eventos-subtitulo casamento-subtitulo">Casamento</h2>
					<p class="eventos-corpo-texto casamento-corpo-texto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui. blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
</p>
				</div> <!-- primeiro bloco de informação -->
				<div class="col-xs-12">
					<div class="decoracao-laranja"></div>
				</div>
				<img src="" alt="Decoração de Casamento">
				<h3 class="eventos-frase-final">Frase final que determina que o evento acabou</h3>
				<div class="col-xs-12">
					<div class="decoracao-laranja"></div>
				</div>
			</article> <!-- fim do casamento (divorcio) -->

			<article class="15anos">
				
				<div class="col-md-6 texto-right 15anos">
					<h2 class="eventos-subtitulo 15anos-subtitulo">15 anos</h2>
					<p class="eventos-corpo-texto 15anos-corpo-texto">Texto do 15 anos</p>
				</div>
				<div class="col-md-6 img-left">
					<img src="" alt="">
				</div> <!-- primeiro bloco de informação -->
				<div class="col-xs-12">
					<div class="decoracao-laranja"></div>
				</div>
				<img src="" alt="Decoração de 15 anos">
				<h3 class="eventos-frase-final">Frase final que determina que o evento acabou</h3>
				<div class="col-xs-12">
					<div class="decoracao-laranja"></div>
				</div>
			</article> <!-- fim do 15anos (envelhecimento) -->

			<article class="formatura">
				<div class="col-md-6 img-left">
					<img src="" alt="">
				</div>
				<div class="col-md-6 texto-left formatura">
					<h2 class="eventos-subtitulo formatura-subtitulo">Formatura</h2>
					<p class="eventos-corpo-texto formatura-corpo-texto">Texto do Formatura</p>
				</div> <!-- primeiro bloco de informação -->
				<div class="col-xs-12">
					<div class="decoracao-laranja"></div>
				</div>
				<img src="" alt="Decoração de Formatura">
				<h3 class="eventos-frase-final">Frase final que determina que o evento acabou</h3>
				<div class="col-xs-12">
					<div class="decoracao-laranja"></div>
				</div>
			</article> <!-- fim da formatura (ressaca) -->
		</div> <!-- fim do container -->
	</section> <!-- fim da section eventos e do container-fluid -->

	<section class="30anos-requinte container-fluid" id="30anos-requinte">
		<div class="container 30anos-corpo">
			<h1 class="30anos-titulo titulo-section">30 Anos Requinte Recepções</h1>
			<p class="30anos-historia">vem aqui um pouco sobre o requinte e sua história</p>
			<div class="col-xs-12">
				<div class="decoracao-laranja"></div>
			</div>
			<div class="col-md-4 30anos-depoimento">
				<h4 class="30anos-cliente-nome">Luquinhas</h4>
				<p class="30anos-cliente-depoimento">Depoimento do animal que falou aqui</p>
			</div>
			<div class="col-md-4 30anos-decoracao">
				<img src="" alt="Decoracao">
			</div>
			<div class="col-md-4 30anos-depoimento">
				<h4 class="30anos-cliente-nome">Luquinhas</h4>
				<p class="30anos-cliente-depoimento">Depoimento do animal que falou aqui</p>
			</div>
		</div> <!-- fim do 30anos corpo -->
	</section><!--  fim de 30 anos requinte -->

	<section class="catalogos container-fluid" id="catalogos">
		<div class="container catalogos-corpo">
			<h1 class="catalogos-titulo titulo-section">Catálogos</h1>
			<div class="catalogo-item col-md-6">
				<img src="" alt="" class="catalogo-icone">
				<a href="" download><button class="catalogo-download">Download</button></a>
			</div><!--  catalogo-item -->
			<div class="catalogo-item col-md-6">
				<img src="" alt="" class="catalogo-icone">
				<a href="" download><button class="catalogo-download">Download</button></a>
			</div><!--  catalogo-item -->
		</div> <!-- fim do catalogo-corpo -->
	</section>

	<footer class="contato container-fluid" id="contato">
		<div class="container contato-corpo">
			<h1 class="contato-titulo titulo-section">Contato</h1>
			<div class="col-md-8 contato-mapa">mapa</div>
			<div class="col-md-4 contato-redes-sociais">icones</div>
		</div>
		<div class="copyright text-center">Requinte Recepções [ano], todos os direitos reservados | Desenvolvido por <a href="http://www.facebook.com/elabora.ej/" target="_blank">Elabora - Conteúdo Criativo</a></div>
	</footer>
</body>
</html>