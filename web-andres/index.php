<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Programador Web">
	<meta name="author" content="andreSJ">

	<title>::AJ-WEB::</title>

	<link rel="shortcut icon" href="img/ico/icono.ico" type="image/x-icon">
	<link rel="icon" href="img/ico/icono.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/menu-responsive.css">
	<link rel="stylesheet" type="text/css" href="css/fontello.css"> <!-- HOJA DE ESTILO DE fontello.com -->
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" type="text/css" href="css/segmentos.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/servicios.css">
	<link rel="stylesheet" type="text/css" href="css/ubicacion.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/crescamos.css">
	<link href="css/style.css" rel="stylesheet"> <!-- SON PARA LA LINEA-->
	<link href="css/main.css" rel="stylesheet">  <!-- SON PARA LA LINEA-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!-- ESTO ES PARA LOS ICONOS MOON FUNCIONEN EN DISPOSITIVOS MOVILES-->

	
</head>
<body>
<header>
	<nav class="menu" id="menu">
			<div class="logo">

			<a href="#slider">
			<img src="img/logotipos/titulo.png" height="18" width="121.563">
			</a>
			</div>

			<div class="menu-bar">
			<span class="icon-menu" id="icono"></span><a href="#" class="bt-menu"></a>
				
			</div>
			<div class="opc-menu">
				<ul>
					<li><a class="" href="#about">SEGMENTOS</a></li>
					<li><a class="" href="#services">SERVICIOS</a></li>
					<li><a class="" href="#ubicacion">UBICACION</a></li>
					<li><a class="" href="#contact">SERVICIO AL CLIENTE</a></li>
					<li><a class="" href="#selection" data-toggle="modal">¡CREZCAMOS JUNTOS!</a></li>
				</ul>
			</div>
			<div class="telf">
							Tlf:944130260
			</div>
	</nav>
</header>

	
<!-- ////////////////////////////////   SLIDER     /////////////////////////////////////////////////////// -->
<section>
	<article id="slider">
			<div class="" id="t1">Nos inspira generar nuevos servicios y soluciones <br>en BPO y recuperación de cartera</div>
			<div class="" id="t2">¿Eres titular de línea de credito?</div>
			<div class="" id="t3"><a href="">inscribete y recibe beneficios</a></div>
			<div class="" id="t4"> 
				<h1>Agregamos valor, generamos confianza</h1>
						<p>
							<div id="t5">
								y construimos sólidas relaciones con nuestros clientes.
							</div>
						</p>
						<div id="imgslider">
							<img src="img/logotipos/logogreen2.png" height="100" width="300">
						</div>						
						<div id="icono-slider">

							<a class="" href="#about">
							  <span class="icon-down-open-big"></span>
							</a>
							
						</div>
			</div>
	<div id="espacio">
	
	</div>
	</article>
</section>

<!--/////////////////////////////////  SEGMENTOS  ///////////////////////////////////////////////// -->

<div id="about">
<h2 id="t6">Segmentos</h2>
<p id="t7"><font color="#a0ce00">Creamos valor y experiencias</font><font color="#A4A4A4"> para cada uno de nuestro grupos de interés.</font></p>
<hr class="title-break">
</div>

<div class="container">  <!-- ESTO SIRVE PARA CENTRAR EL TEXTO ; SI QUIERES Q ABARQUE TODO LE PONES: "container-fluid"-->
		<section class="main row" id="conte-1">  <!--SI VOLVERE A HACER OTRA FILA CON COLSPAN YA NO USO LA CLASE MAIN ROW SINO SOLO "ROW" 

			IMPORTANTE¡¡¡¡¡¡¡¡

			SI EL CONTENIDO DE CADA COLUMNA ES DE DIFERENTE ALTO SE PUEDE DESACOMODAR,ES CUESTION DE PONER DEBAJO DE DONDE SE DESACOMODA
			EL SIGUIENTE TEXTO :       <div class="clearfix visible-sm-block"></div>

			OBS: En vez de "sm" puede variar segun en la medida q tengamos el problema.
			OBS2: Si en caso quisieras desplazar tu columna dentro de class le agregas: col-md-offset-3 
			donde md es la medida de pantalla y 3 la cantidad de columnas q se desplazara

			-->

			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="c1"> <!-- ESTOS SON LOS TAMAÑOS PARA DISPOSITIVOS -->
				<img src="img/icono-azul.jpg"  class="imgcentrada">
				<h3>
					<strong>Cliente Línea de Crédito</strong>
				</h3>
				<p class="tcliente" >Entregamos beneficios y soluciones para nuestros titulares de obligación.</p>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="c2">
				<img src="img/icono-naranja.jpg" class="imgcentrada">
				<h3>
					<strong>Cliente Externo</strong>
				</h3>
				<p class="tcliente" >Nuestros clientes cuentan con el respaldo, cobertura y experiencia para obtener mejores resultados.</p>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="c3">
				<img src="img/icono-verde.jpg" class="imgcentrada">
				<h3>
					<strong>Nuestro Equipo</strong>
				</h3>
				<p class="tcliente" >Propiciamos el crecimiento de las competencias y habilidades de nuestros colaboradores para entregar el mejor servicio.</p>
			</div>

		</section>
</div>
<div id="fondosegmento">
	<div class="container">
			<div id="c4">
			<img src="img/icon-platform.png">

			<h2>Trabajamos a través de una plataforma dinámica</h2>
			<p>Desarrollando campañas de ventas, servicio al cliente y colocación de productos maximizando la experiencia del usuario.</p>
			</div>
	</div>
</div>

<!--/////////////////////////////////  SERVICIOS ///////////////////////////////////////////////// -->
<div id="services">
	<h2 id="s1">Servicios</h2>
	<p id="s2"><font color="#A4A4A4">20 años respondiendo a</font><font color="#a0ce00"> nuestros aliados y respaldándolos </font><font color="#A4A4A4"> con estrategias innovadoras de negocio.</font></p>
	<hr class="title-break">
		<div class="container">
			<section class="main row" id="s5">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-md-offset-2 col-sm-offset-3" id="s3">
			<img src="img/s1.png">
			<h4><strong>Call y Contact Center</br></strong><p>Comunicamos efectivamente.</p></h4>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="s4">
			<img src="img/s2.png">
			<h4><strong>Recuperación de Cartera</strong></br><p>Estrategias de cobro personalizadas.</p></h4>
			</div>
			</section>
		</div>
</div>
	<div id="fondosegmento">
		<div class="container">
				<div class="c4">
				<h2>Política de mejoramiento continuo</h2>
				<p>Tenemos la firme intención de día a día perfeccionar nuestro servicio y entregar más valor mejorando la experiencia de nuestros aliados estratégicos.</p>
				<hr class="title-break">

				<div>
					<div class="contenedor-lef fondo-b col-xs-10 col-sm-5 col-md-5 col-lg-5 col-md-offset-1">
						<div  class="contenedor-lef centrar-derecho caja-img">
							<img src="img/icono-fundacion-aecsa.png">
						</div>
						<div  class="contenedor-lef caja-texto">
							<h4>Sistemas de gestión de calidad</h4>
							<p><font color="#A4A4A4">Estratégias de cobro personalizadas.</font></p>
						</div>
					</div>

					<div class="contenedor-lef fondo-b col-xs-10 col-sm-5 col-md-5 col-lg-5">
						<div  class="contenedor-lef centrar-derecho caja-img">
							<img src="img/inclusion-social.png">
						</div>
						<div  class="contenedor-lef caja-texto">
							<h4>HSE</h4>
							<p><font color="#A4A4A4">Sistema de gestión de la salud, seguridad y ambiente en el trabajo.</font></p>
						</div>
					</div>
				</div>


				<div>
					<div class="contenedor-lef fondo-b col-xs-10 col-sm-5 col-md-5 col-lg-5 col-md-offset-1">
						<div  class="contenedor-lef centrar-derecho caja-img">
							<img src="img/icono-fundacion-aecsa.png">
						</div>
						<div  class="contenedor-lef caja-texto">
							<h4>SARO</h4>
							<p><font color="#A4A4A4">Sistema de administración de riesgos operativos.</font></p>
						</div>
					</div>

					<div class="contenedor-lef fondo-b col-xs-10 col-sm-5 col-md-5 col-lg-5">
						<div  class="contenedor-lef centrar-derecho caja-img">
							<img src="img/inclusion-social.png">
						</div>
						<div  class="contenedor-lef caja-texto">
							<h4>SGSI</h4>
							<p><font color="#A4A4A4">Sistema de gestión de seguridad de la información.</font></p>
						</div>
					</div>
				</div>



				</div>
		</div>
<div class="spacer big"></div><!--   ESPACIO DE RELLENO -->

		<div class="container">
				<div class="c4"> <!--La clase "c4" solo es para centrar el contenido -->
				<h2>Responsabilidad social</h2>
				<p>Un compromiso permanente con la comunidad y el medio ambiente.</p>
				<hr class="title-break">

				<div>
					<div class="contenedor-lef fondo-b col-xs-10 col-sm-5 col-md-5 col-lg-5 col-md-offset-1">
						<div  class="contenedor-lef centrar-derecho caja-img">
							<img src="img/icono-fundacion-aecsa.png">
						</div>
						<div  class="contenedor-lef caja-texto">
							<h4>Fundacion AECSA</h4>
							<p><font color="#A4A4A4">Investigación, desarrollo y educación.</font></p>
						</div>
					</div>

					<div class="contenedor-lef fondo-b col-xs-10 col-sm-5 col-md-5 col-lg-5">
						<div  class="contenedor-lef centrar-derecho caja-img">
							<img src="img/inclusion-social.png">
						</div>
						<div  class="contenedor-lef caja-texto">
							<h4>Inclusión social</h4>
							<p><font color="#A4A4A4">Plan de desarrollo humano.<font color="white">-----------</font></p>

						</div>
					</div>
				</div>

				</div>
		</div>
	</div>

<!--/////////////////////////////////  UBICACION  ///////////////////////////////////////////////// -->
<div id="ubicacion">
	<h2 id="u1">Nuestra ubicación</h2>
	<p id="u2"><font color="#A4A4A4">Presencia y acompañamiento,<br></font><font color="#a0ce00"> atención ágil y cercana </font></p>
	<hr class="title-break">
	<div class="container">
	<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.1567083948344!2d-76.9808366859655!3d-11.963649991522688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDU3JzQ5LjEiUyA3NsKwNTgnNDMuMSJX!5e0!3m2!1ses-419!2spe!4v1485023893123" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>

<!--/////////////////////////////////  SERVICIOS AL CLIENTE  ///////////////////////////////////////////////// -->
<div id="contact">
	<h2 id="cont1">Servicio al cliente</h2>
	<p id="cont2"><font color="#A4A4A4">Presencia y acompañamiento,<br></font><font color="#a0ce00"> atención ágil y cercana </font></p>
	<hr class="title-break">
	<div class="container">
			<section class="main row" id="s5">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="sc1">
				<p><font color="red">Por favor diligencie todos los campos contenidos en este formulario.</font></p>


									<form id="form-service" role="form" class="text-left" method="POST" action="form-client.php">
										<div class="form-group">
											<label for="service-proyect">Área o proyecto:</label>
											<input type="text" class="form-control" id="service-proyect" name="service-proyect" placeholder="">
										</div>
										<div class="form-group">
											<label for="service-pqrs">PQRS:</label>
											<select class="form-control" id="service-pqrs" name="service-pqrs">
												<option value="peticion">Peticion</option>
												<option value="queja">Queja</option>
												<option value="reclamo">Reclamo</option>
												<option value="sugerencia">Sugerencia</option>
											</select>
										</div>
										<div class="form-group">
											<label for="service-description">Descripción:</label>
											<textarea id="service-description" name="service-description" class="form-control" rows="6"></textarea>
										</div>
										<div class="form-group">
											<label for="service-name">Nombre:</label>
											<input type="text" class="form-control" id="service-name" name="service-name" placeholder="">
										</div>
										<div class="form-group">
											<label for="service-document">Documento:</label>
											<input type="number" class="form-control" id="service-document" name="service-document" placeholder="">
										</div>
										<div class="form-group">
											<label for="service-address">Dirección:</label>
											<input type="text" class="form-control" id="service-address" name="service-address" placeholder="">
										</div>
										<div class="form-group">
											<label for="service-city">Ciudad:</label>
											<input type="text" class="form-control" id="service-city" name="service-city" placeholder="">
										</div>
										<div class="form-group">
											<label for="service-phone">Teléfono:</label>
											<input type="tel" class="form-control" id="service-phone" name="service-phone" placeholder="">
										</div>
										<div class="form-group">
											<label for="service-email">Correo Electrónico:</label>
											<input type="email" class="form-control" id="service-email" name="service-email" placeholder="">
										</div>
										<div class="form-group mc-form-group">
											<input type="checkbox" id="service-accept" name="service-accept" value="1"> 
											<span class="mc-check-error">Declaro que la información diligenciada es veraz y verificable.</span>
										</div>
										<div class="spacer small"></div>
										<div class="form-group mc-form-group">
											<button id="service-submit" type="submit" class="btn btn-lg btn-dark btn-default">ENVIAR</button>
										</div>
									</form>

			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="sc2">
					<p>Es importante precisar que AECSA direccionará sus esfuerzos a brindar una solución eficaz, veráz y oportuna a las solicitudes de los clientes en general.</p>

					<p><font color="#a0ce00">A. Marco Legal<br>
						Ley 1581 de 2012<br>
						Decreto reglamentario 1377 de 2013<br><br>
						B. Canales de recepción</font>
					</p>

					<p>
						Dirección de requerimientos y atención al cliente: Avenida de las Américas #46-41 Bogotá D.C.<br> 
						Línea de atención al cliente 018000-944094 Opción 1<br>
						Fax: +57 1 3692331<br>
						atencionalcliente@aecsa.co
					</p>

					<p>
						<font color="#a0ce00">C. Formato de recepción de peticiones, quejas, reclamos y/o sugerencias
						FR-PQRS</font>
					</p>


					<p>
						<font color="#a0ce00">D. Políticas de tratamiento de la información</font><br>
						Línea de atención al cliente: 018000-944094 Opción 9
					</p>


					<p>
						<font color="#a0ce00">E. Autorización del tratamiento de la información</font><br>
						Diligenciando el formato adjunto podrá actualizar su información personal lo cual nos facilitará el poder contactarlo.
					</p>
			</div>
			</section>

	</div>
</div>


<!--/////////////////////////////////  CREZCAMOS JUNTOS  ///////////////////////////////////////////////// -->
<div id="selection" class="modal fade">
		<div class="modal-dialog">
				<div class="modal-content">

				<!-- HEADER DE LA VENTANA   -->
					<div class="modal-header">
						<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h2 class="modal-title">TRABAJE CON NOSOTROS</h2>
					</div>

				<!-- CONTENIDO DE LA VENTANA   -->
					<div class="modal-body">

									<form id="form-service" role="form" class="text-left" method="POST" action="form-client.php">
									<label for="service-address">Rellene todos los campos:</label>
										<div class="form-group">
											<input type="text" class="form-control" id="service-proyect" name="service-proyect" placeholder="Nombre">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="service-name" name="service-name" placeholder="DNI">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="service-document" name="service-document" placeholder="Dirección">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="service-city" name="service-city" placeholder="Ciudad">
										</div>
										<div class="form-group">
											<input type="tel" class="form-control" id="service-phone" name="service-phone" placeholder="Teléfono">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="service-email" name="service-email" placeholder="Correo Electrónico:">
										</div>
										<div id="adj-cv">
											<button type="button" class="btn btn-primary">ADJUNTAR CV.</button>
										</div>
										<div class="spacer small"></div>

										<div class="form-group mc-form-group" id="condicion">
											<input type="checkbox" id="service-accept" name="service-accept" value="1"> 
											<span class="mc-check-error">Declaro que la información diligenciada es veraz y verificable.</span>
										</div>
										
									</form>

					</div>

				<!-- FOODER DE LA VENTANA   -->
					<div class="modal-footer">
						<div class="form-group mc-form-group">
						

						<button id="service-submit" type="submit" class="btn btn-dark btn-default">ENVIAR</button>
						

						</div>

					</div>


				</div>
		</div>


</div>

<!--/////////////////////////////////  PIE DE PAGINA     ///////////////////////////////////////////////// -->
<footer>
	<div class="spacer big"></div><!--   ESPACIO DE RELLENO -->


		<nav class="menupie">
					<ul>
						<li><a class="" href="#about">SEGMENTOS</a></li>
						<li><a class="" href="#services">SERVICIOS</a></li>
						<li><a class="" href="#ubicacion">UBICACION</a></li>
						<li><a class="" href="#contact">SERVICIO AL CLIENTE</a></li>
						<li><a class="" href="#selection" data-toggle="modal">¡CREZCAMOS JUNTOS!</a></li>
					</ul>

		</nav>



		<div class="logopie">
		<img src="img/logotipos/logowhite.png" height="100" width="300">
		</div>

		<div class="dir-footer">
						Calle C MZ P1 LT.25 Santa Maria-SJL | Telf: 944130260
	</div>

<div class="spacer big"></div>  <!--   ESPACIO DE RELLENO -->
</footer>
<script src="js/jquery-latest.js"></script>   <!--ESTE JQUERY ES PARA EL MENU STICKY -->
<script src="js/sticky.js"></script>  <!--ESTE JS ES PARA EL MENU STICKY  ,TRABAJA CON LA CLASE .MENU-FIXED Q ESTA EN EL CSS: ESTILO.CSS-->
<script src="js/menu-movil.js"></script>  <!-- ESTO ES PARA Q EL MENU APAREZCA Y DESAPARESCA -->
<script src="js/jquery.sudoslider.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>