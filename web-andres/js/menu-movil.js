$(document).ready(main);
var contador =1;
function main(){

		$('#icono').click(function(){

			$('.opc-menu').toggle();
			var z= document.getElementById("icono").className;

			if(z =='icon-menu') {
				document.getElementById("icono").classList.remove('icon-menu');
				document.getElementById("icono").classList.add('icon-cancel');	
			};
			if(z == 'icon-cancel'){
				document.getElementById("icono").classList.remove('icon-cancel');
				document.getElementById("icono").classList.add('icon-menu');	
			};


			 /*  if(contador ==1){
				$('.opc-menu').animate({
					left: '-100%'
				});
				contador =0;
			} else{
				contador =1;
				$('.opc-menu').animate({
					left: '0'
				});
			}*/

		}); 
};


