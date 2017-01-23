$(document).ready(function(){

	var altura = $('.menu').offset().top; /* ESTA ES LA DISTANCIA QUE TIENE EL MENU AL BORDE SUPERIOR*/
	$(window).on('scroll', function(){

		if ( $(window).scrollTop() > altura ) {
			$('.menu').addClass('menu-fixed');  /* AL ELEMENTO Q TIENE LA CLASE .MENU SE LE AGREGA LA CLASE MENU-FIXED*/

		} else{
			$('.menu').removeClass('menu-fixed'); /* AL ELEMENTO Q TIENE LA CLASE .MENU SE LE QUITA LA CLASE MENU-FIXED*/
		}
	});
});