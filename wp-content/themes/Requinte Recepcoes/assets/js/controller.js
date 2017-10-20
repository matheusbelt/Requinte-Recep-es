$( document ).ready(function() {


	//MENU
	$( ".hamburger" ).click(function() {
		$( ".menu-nav" ).slideToggle( "slow", function() {
			$( ".hamburger" ).hide();
			$( ".cross" ).show();
		});
	});

	$( ".cross" ).click(function() {
	$( ".menu-nav" ).slideToggle( "slow", function() {
	$( ".cross" ).hide();
	$('.hamburger').removeClass('hide');
	$( ".hamburger" ).show();

	});
	});


	//endereço
	// $('.adress__icon').click(function(){
	// 	$('.adress, .adress__quadrado').removeClass('adress--inativo');
	// 	$('.adress, .adress__quadrado').addClass('adress--ativo');
	// });
	
	
		$('.adress__icon').click(function(){
			if ($(".adress").hasClass("adress--ativo")) {
					$('.adress, .adress__quadrado').removeClass('adress--ativo');
					$('.adress, .adress__quadrado').addClass('adress--inativo');
    		}
    		else if ($(".adress").hasClass("adress--inativo")){    			
					$('.adress, .adress__quadrado').removeClass('adress--inativo');
					$('.adress, .adress__quadrado').addClass('adress--ativo');
    		}
    		else{}
		});

});