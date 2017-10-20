<?php wp_footer() ?>
<footer class="contato container-fluid" id="contato">
		<div class="container contato-corpo">
			<h1 class="contato-titulo titulo-section">Contato</h1>
			<div class="col-md-7 col-xs-12 contato-mapa" id="mapa"></div>
			<div class="col-md-5 col-xs-12 contato-redes-sociais">
        <div class="icon-flex">
          <a href="https://www.facebook.com/requinte.recepcoes.1" target='_blank'><div class="col-xs-4 icon"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/face.png" alt="Facebook"></div></a>
          <a href="" target='_blank'><div class="col-xs-4 icon"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/insta.png" alt=""></div></a>
          <div class="col-xs-4 icon"><img src="" alt=""></div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>    
      </div>
		</div>
		<div class="copyright text-center">Requinte Recepções <?php the_date('Y'); ?>, todos os direitos reservados | Desenvolvido por <a href="http://www.facebook.com/elabora.ej/" target="_blank">Elabora - Conteúdo Criativo</a></div>
	</footer>

</body>
</html>