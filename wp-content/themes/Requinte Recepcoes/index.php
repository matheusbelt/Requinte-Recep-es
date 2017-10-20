<?php get_header() ?>
<body>
	<div class="container-fluid header">
	<center>
		<div class="logo">
			<div class="decoracao wow animated fadeInLeft" data-wow-delay="1s"></div>
			<img src="<?php echo bloginfo('template_directory'); ?>/assets/img/logo-superior.png" alt="RR" class="wow animated fadeInDownBig">
			<div class="decoracao wow animated fadeInRight" data-wow-delay="1s"></div>
		</div>
		
	</center>
	</div> <!-- final do header e container-fluid -->
	<div class="container-fluid menu-background">
		<div class="container menu">
				<div class="col-md-3">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo-horizontal"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/logo-horizontal.png" alt="Requinte Recepções"></a>
				</div>
				<div class="col-md-9">
					<nav class="navHeader">
						<ul class="menu-inicial nav nabar-nav">
							<a href="#eventos"><li>Eventos</li></a>
							<a href="#trinta-anos-requinte"><li>Depoimentos</li></a>
							<a href="#catalogos"><li>Catálogo</li></a>
							<a href="#contato"><li>Contato</li></a>
						</ul>
					</nav><!-- fim da navbar -->
				</div>
		</div>
	</div><!--  fim do menu-background container-fluid -->

	 <!-- EVENTOS  -->
	<section class="eventos container-fluid" id="eventos">
		<div class="container">
			<h1 class="eventos-titulo titulo-section">Eventos</h1>

			<!-- CASAMENTO -->
			<article class="casamento-bloco">
				<div data-wow-delay=".3s" class="col-md-6 col-xs-12 img-left wow fadeInLeftBig animated">
					<img src="<?php echo bloginfo('template_directory'); ?>/assets/img/casamento.jpg" alt="Casamento Requinte" title="Requinte, sempre pensando no seu dia mais feliz">
				</div>
				<div class="col-md-5 col-md-offset-1  col-xs-12 texto-right casamento wow slideInRight">
					<h2 class="eventos-subtitulo casamento-subtitulo">Casamento</h2>
					<p class="eventos-corpo-texto casamento-corpo-texto">Com um espaço agradável e decoração personalizada, o Requinte Recepções dispõe de todo o necessário para a realização e recepção de um casamento de alto nível. Podendo a cerimônia ser realizada tanto em igreja como no próprio salão, independentemente, tudo estará preparado para a chegada dos noivos e convidados de forma impecável. 
					</p>
				</div> <!-- primeiro bloco de informação -->
				<div class="col-xs-12">
					<div class="decoracao-laranja"></div>
				</div>
				<img src="<?php echo bloginfo('template_directory'); ?>/assets/img/casamento-decoracao.jpg" alt="Decoração de Casamento" class="wow fadeInRightBig" data-wow-delay=".9s">
				<h3 class="eventos-frase-final">O dia mais feliz da sua vida aqui, na Requinte Recepções</h3>
				<div class="col-xs-12">
					<div class="decoracao-laranja"></div>
				</div>
			</article> <!-- fim do casamento (divorcio) -->

			<!-- 15 ANOS -->
			<article class="quinzeanos-bloco">
				<div class="col-md-5  col-xs-12 texto-right quinzeanos wow slideInLeft">
					<h2 class="eventos-subtitulo quinzeanos-subtitulo">15 anos</h2>
					<p class="eventos-corpo-texto quinzeanos-corpo-texto">Para a transformação da menina em mulher nada melhor que um salão tradicional modernizado! Com o espaço e decoração necessários para o Dia de Princesa, temos a certeza de criar o melhor cenário possível para encantar até mesmo o "papai" que recusa-se em aceitar (e gastar!) nesta tão esperada comemoração!</p>
				</div>
				<div class="col-md-6 col-md-offset-1 col-xs-12 img-left  wow fadeInRightBig animated">
					<img data-wow-delay=".3s" src="<?php echo bloginfo('template_directory'); ?>/assets/img/15anos.jpg" alt="Festa de 15 anos requinte" title="Pensando onde fazer sua festa de 15 anos? Acabou de achar o lugar!">
				</div> <!-- primeiro bloco de informação -->
				<div class="imagem-decoracao">
					<img src="<?php echo bloginfo('template_directory'); ?>/assets/img/15anos-decoracao.jpg" alt="Decoração de 15 anos" class="wow fadeInLeft" data-wow-delay=".9s">
					<h3 class="eventos-frase-final">Cada degrau é uma memória de felicidade que a aniversariante nunca irá esquecer</h3>
					<div class="col-xs-12">
						<div class="decoracao-laranja"></div>
					</div>
				</div>
			</article> <!-- fim do 15anos (envelhecimento) -->
			

			<!-- FORMATURA -->
			<article class="formatura-bloco">
				<div class="col-md-6 col-xs-12 img-left">
					<img src="<?php echo bloginfo('template_directory'); ?>/assets/img/formatura.jpg" alt="Formatura, piano e flor" title="Formatura é na Requinte" class="wow fadeInLeft" data-wow-delay=".5s">
				</div>
				<div class="col-md-5 col-xs-12 col-md-offset-1 texto-left formatura wow slideInRight">
					<h2 class="eventos-subtitulo formatura-subtitulo">Formatura</h2>
					<p class="eventos-corpo-texto formatura-corpo-texto">O Requinte Recepções possui um amplo salão que tornará o Baile de formatura em um momento inesquecível para os formandos e seus familiares, que ficarão maravilhados com nossa decoração e empolgação. O material disponível trarão o conforto necessário e espontaneidade para a festa se tornar a mais esperada do ano.</p>
				</div> <!-- primeiro bloco de informação -->

				<div class="imagem-decoracao">
					<img src="<?php echo bloginfo('template_directory'); ?>/assets/img/15anos_festa.jpg" alt="Decoração de Formatura" title="Quer jeito melhor de comemorar sua formatura?" class="wow fadeInRightBig" data-wow-delay=".9s">
					<h3 class="eventos-frase-final">Nenhuma comemoração é melhor que a de um novo ciclo. Olá diploma!</h3>
					<div class="col-xs-12">
						<div class="decoracao-laranja"></div>
					</div>
				</div>
			</article> <!-- fim da formatura (ressaca) -->
		</div> <!-- fim do container -->
	</section> <!-- fim da section eventos e do container-fluid -->



	<!-- 30 anos requinte / parte de depoimentos -->
	<section class="trinta-anos-requinte container-fluid" id="trinta-anos-requinte">
		<div class="container trinta-anos-corpo">
			<h1 class="trinta-anos-titulo titulo-section">30 Anos Requinte Recepções</h1>
			<p class="trinta-anos-historia">A partir de um sonho, a ideia se formou... <br> 

      Fundado em 8 de Novembro de 1986, o salão iniciou sua atividade com locações de material, cursos de culinária, algumas pequenas reuniões e festas familiares. O necessário para tornar o local conhecido. No dia 31 de Dezembro de 1986, o Requinte Recepções teve sua inauguração com a festa de Reveillon, tornando-se a primeira casa de festas de João Pessoa!
        Desde então, com excelência e profissionalismo, o Requinte está sempre inovando e provando que merece o mérito de salão pioneiro com sua estrutura clássico-moderna. <br>

           Com a disponibilidade de dois ambientes climatizados, cardápios variados, decoração própria, entre outros pequenos "segredinhos" que nos tornam tão especiais para nossos clientes. <br>
            Confira e descobra o motivo pelo qual firmamos a preferência de nossos clientes quando o assunto é festa: <br>
</p>
			<div class="col-xs-12">
				<div class="decoracao-laranja"></div>
			</div>
			<div class="col-md-4 col-xs-12 trinta-anos-depoimento">
				<div class="depoimento-1 wow fadeInLeft" data-wow-delay=".3s">
					<h4 class="trinta-anos-cliente-nome">Yanna Tormes</h4>
					<p class="trinta-anos-cliente-depoimento">Lugar maravilhos! Atendimento fantástico!</p>
				</div>
				<div class="depoimento-2 wow fadeInLeft" data-wow-delay=".6s">
					<h4 class="trinta-anos-cliente-nome">Carol Oliveira</h4>
					<p class="trinta-anos-cliente-depoimento">Foi muitoooo divertido! A comida estava boa, teve bebida pra todo mundo e todos se divertiram!</p>
				</div>
				<div class="depoimento-3 wow fadeInLeft" data-wow-delay=".9s">
					<h4 class="trinta-anos-cliente-nome">Magna Rejane</h4>
					<p class="trinta-anos-cliente-depoimento">Ótimo lugar para fazer suas comemorações! como sugere o nome do lugar Requinte total!</p>
				</div>
				<div class="depoimento-3 wow fadeInLeft" data-wow-delay="1.2s">
					<h4 class="trinta-anos-cliente-nome">Helliane Marry</h4>
					<p class="trinta-anos-cliente-depoimento">Tem uma ótima estrutura para qualquer tipo de evento..... Fiz o casamento da filha, agora vou fazer o meu</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 trinta-anos-decoracao wow fadeIn animated" data-wow-delay="1s">
				<center>
				<img src="<?php echo bloginfo('template_directory'); ?>/assets/img/emblema.png" alt="Emblema Requinte 30 anos" title="30 anos da Requinte Recepções">
			</center>
			</div>
			<div class="col-md-4 col-xs-12 trinta-anos-depoimento wow fadeInDown" data-wow-delay=".3s">
				<h4 class="trinta-anos-cliente-nome">Erica Renally</h4>
					<p class="trinta-anos-cliente-depoimento">Meu grande sonho de casar-me com meu esposo foi concretizado com as graças de Deus e a Ele tanto rezamos para que escolhêssemos os melhores fornecedores para o dia mais importante de nossas vidas! Pois bem, Deus nos atendeu e no último dia 10/09/16 nossa bela celebração ocorreu na Igreja das Mercês e recepcionamos os nossos convidados especiais no Requinte, uma decisão super acertada e feliz! <br><br>
					Só ouço dos convidados elogios do buffet, jantar, salgados, docinhos, caldinhos e crepes, bem como da decoração da Igreja, a qual me "encheu os olhos", da harmonia e beleza da recepção e do atendimento dos garçons, dos seguranças, da equipe no geral. 
					Quão importantes esses detalhes são para nós, a sensação de que todo o investimento foi válido e de que o sonho foi concretizado tal como tanto desejamos é maravilhosa!
				</p>
			</div>
		</div> <!-- fim do trinta-anos corpo -->
	</section><!--  fim de 30 anos requinte -->

	
	<!-- CATALOGOS -->
	<section class="catalogos container-fluid" id="catalogos">
		<div class="container catalogos-corpo">
			<h1 class="catalogos-titulo titulo-section">Catálogos</h1>
			<div class="col-md-6 col-xs-12">
				<center>
					<div class="catalogo-item">
						<h2 class="catalogo-item-titulo">Buffet</h2>
						<img src="<?php echo bloginfo('template_directory'); ?>/assets/img/icon-buffet.png" alt="" class="catalogo-icone">
					</div><!--  catalogo-item -->
					<a href="" download><button class="catalogo-download">Download</button></a>
				</center>
			</div> <!-- fim do col-md-6 -->
			<div class="col-md-6 col-xs-12">
			<center>
					<div class="catalogo-item">
						<h2 class="catalogo-item-titulo">Fotos</h2>
						<img src="<?php echo bloginfo('template_directory'); ?>/assets/img/icon-foto.png" alt="" class="catalogo-icone">
					</div><!--  catalogo-item -->
					<a href="" download><button class="catalogo-download">Download</button></a>
				</center>
			</div> <!-- fim do col-md-6 -->
		</div> <!-- fim do catalogo-corpo -->
	</section>

<?php get_footer() ?>