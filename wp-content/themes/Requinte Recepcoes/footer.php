<?php wp_footer() ?>
<footer class="contato container-fluid" id="contato">
		<div class="container contato-corpo">
			<h1 class="contato-titulo titulo-section">Contato</h1>
			<div class="col-md-5 col-md-offset-7 col-xs-12 contato-redes-sociais">
        
        

        <div class="icon-flex"> <!-- ICONES -->
          <a href="https://www.facebook.com/requinte.recepcoes.1" target='_blank'><div class="col-xs-4 icon"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/face.png" alt="Facebook"></div></a>
          <a href="https://www.instagram.com/requinte_recepcoes/" target='_blank'><div class="col-xs-4 icon"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/insta2.png" alt=""></div></a>
          <div class="adress adress--inativo">
          <p>Av. Juarez Tavora - 348 - Torre, João Pessoa</p>
          <p>(83) 3224-3857</p>
        </div>
        <div class="adress__quadrado adress--inativo"></div>
          <div class="col-xs-4 icon adress__icon"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/adress.png" alt="Endereço" title="Clique aqui para ver o endereço da requinte"></div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>    
      </div>
		</div>
		<div class="copyright text-center">Requinte Recepções <?php the_date('Y'); ?>, todos os direitos reservados | Desenvolvido por <a href="http://www.facebook.com/elabora.ej/" target="_blank">Elabora - Conteúdo Criativo</a></div>
	</footer>

</body>
</html>