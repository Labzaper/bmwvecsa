<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Puebla - BMW Vecsa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="BMW Grupo VECSA. Agencia de autos. Distribuidor y concesionario de las marcas BMW, MINI y Motorrad en los estados de Puebla, Veracruz, Oaxaca e Hidalgo">
	<meta name="keywords" content="BMW, BMW Puebla, BMW Veracruz, BMW Hidalgo, BMW Oaxaca, Puebla, Veracruz, Oaxaca, Hidalgo, Servicio BMW, coches, coche, servicio, taller, Serie 1, Serie 3, Serie 5, Serie 6, Serie 7, X3, X5, Z4, M3, M5, M6, motorrad, motocicletas, financial services, hojalateria, pintura">
	<meta name="copyright" content="Grupo VECSA">
	<meta name="author" content="Guillermo Cruces">
	<link rel="shortcut icon" href="../favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/seccion_agencias.css">
	<link rel="stylesheet" type="text/css" href="../css/menu-desktop.css">	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
	<script>
		function initialize() {
			var myLatlng = new google.maps.LatLng(19.026110, -98.236154);
			var mapOptions = {
			zoom: 16,
			center: myLatlng
		}
			var map = new google.maps.Map(document.getElementById('map-puebla'), mapOptions);

			var image = 'images/favicon.png';
			var marker = new google.maps.Marker({
			  position: myLatlng,
			  map: map,
			  icon: image,
			  title: 'Vecsa Puebla'
			});
	     }
	     google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>

<body>
	<?php include('../includes/menu_mobile.inc.php'); ?>
	<header class="header">
		<div class="logo-bmw">
			<img src="../img/home/logo-bmw.png">
		</div>
		<div class="icon-menu">&nbsp;</div>
		<div class="title">BMW Grupo Vecsa</div>
	<?php include('../includes/menu_seccion.inc.php'); ?>
	</header>
	<picture>
		<img class="pic-header" src="../img/agencias/puebla_agencia01.jpg" alt="agencia Vecsa Puebla">				
	</picture>
	<div class="titulo-agencia-mobile">
		<h4>Vecsa Puebla</h4>
	</div>
	<div class="container">	
		<div class="titulo-agencia">
			<div class="frames-vecsa"><img src="../img/frames-vecsa.png"></div>
			<h4 class="agencia">Vecsa Puebla</h4>
		</div>
		<picture>
			<img class="picture-agencia" src="../img/agencias/puebla_agencia01.jpg" alt="agencia Vecsa Puebla">				
		</picture>
		<div class="content">
				<div class="side-fixed-menu">
					<ul class="menu-agencia">
						<li>
							<a href="#menu-ventas"><span class="icon-phone"></span>Ventas</a>
						</li>
						<li>
							<a href="#menu-servicio"><span class="icon-phone"></span>Servicio</a>
						</li>
						<li>
							<a href="#menu-refacciones"><span class="icon-phone"></span>Refacciones</a>
						</li>
						<li>
							<a href="#menu-ubicacion"><span class="icon-location"></span>Domicilio | Ubicación</a>
						</li>
						<li>
							<a href="#menu-horarios"><span class="icon-clock"></span>Horario de atención</a>
						</li>
					</ul>					
				</div>

				<section class="datos-agencia">
					<article class="departamentos" id="menu-ventas">					
						<div class="agencia-telefono">
							<h5>Ventas BMW</h5>	
							<p class="tel"><span class="icon-phone"></span> 01(222) 30.90.800 Extensión 100</p>
						</div>	
						<div class="vcard">
							<div class="nombre1 display">
								<p>Alejandro Cervantes</p>
							</div>
							<div class="extension1 display">	
								<!-- <p><span class="icon-phone"></span>1012</p> -->
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:alejandro.cervantes@bmwvecsa.com">alejandro.cervantes@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Dolores Ivonne Rivero</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>Directo 01(222) 30.90.814</p>									
								<p><span class="icon-phone"></span>Extensión 114</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:ivonne.rivero@bmwvecsa.com">ivonne.rivero@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>											
						<div class="vcard">
							<div class="nombre1 display">
								<p>Javier Sánchez</p>
							</div>
							<div class="extension1 display">	
								<!-- <p><span class="icon-phone"></span>1012</p> -->
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:javier.sanchez@bmwvecsa.com">javier.sanchez@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Jenifer Santander</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>Directo 01(222) 30.90.811</p>	
								<p><span class="icon-phone"></span>Extensión 111</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:jenifer.santander@bmwvecsa.com">jenifer.santander@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Jesús Pastelín</p>
							</div>
							<div class="extension1 display">								
								<!-- <p><span class="icon-phone"></span>1011</p> -->
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:jesus.pastelin@bmwvecsa.com">jesus.pastelin@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>	
						<div class="vcard">
							<div class="nombre1 display">
								<p>Enrique Vázquez</p>
							</div>
							<div class="extension1 display">								
								<!-- <p><span class="icon-phone"></span>1012</p> -->
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:enrique.vazquez@bmwvecsa.com">enrique.vazquez@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Mary Carmen Deloya</p>
							</div>
							<div class="extension1 display">								
								<!-- <p><span class="icon-phone"></span>1011</p> -->
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:mdeloya@bmwvecsa.com">mdeloya@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Norberto Luna</p>
							</div>
							<div class="extension1 display">								
								<!-- <p><span class="icon-phone"></span>1012</p> -->
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:norberto.luna@bmwvecsa.com">norberto.luna@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>	
						<div class="vcard">
							<div class="nombre1 display">
								<p>Gerardo Bachbush</p>
							</div>
							<div class="extension1 display">
								<p><span class="icon-phone"></span>Directo 01(222) 30.90.809</p>							
								<p><span class="icon-phone"></span>Extensión 109</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:gerardo.bachbush@bmwvecsa.com">gerardo.bachbush@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Gerente Comercial</p>
							</div>
						</div>											
					</article>
					<article class="departamentos" id="menu-ventas">										
						<div class="agencia-telefono">
							<h5>Ventas MINI</h5>	
							<p class="tel"><span class="icon-phone"></span> 01(222) 30.90.801</p>
						</div>
						<!-- MINI -->
						<div class="vcard">
							<div class="nombre1 display">
								<p>Abraham González</p>
							</div>
							<div class="extension1 display">
								<p><span class="icon-phone"></span>01(222) 30.90.819</p>
								<p><span class="icon-phone"></span>Extensión 119</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:abraham.gonzalez@bmwvecsa.com">abraham.gonzalez@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>MINI</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Gabriela Rosete</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>Directo 01(222) 30.90.818</p>							
								<p><span class="icon-phone"></span>Extensión 118</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:gabriela.rosete@bmwvecsa.com">gabriela.rosete@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>MINI</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Kristian Jiménez</p>
							</div>
							<div class="extension1 display">
								<p><span class="icon-phone"></span>01(222) 30.90.819</p>
								<p><span class="icon-phone"></span>Extensión 119</p>
							</div>
							<div class="correo1 display">							
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:kristian.jimenez@bmwvecsa.com">kristian.jimenez@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>MINI</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Montserrat Mier</p>
							</div>
							<div class="extension1 display">
								<p><span class="icon-phone"></span>01(222) 30.90.819</p>	
								<p><span class="icon-phone"></span>Extensión 119</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:montserrat.mier@bmwvecsa.com">montserrat.mier@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>MINI</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Sergio Chazaro</p>
							</div>
							<div class="extension1 display">
								<p><span class="icon-phone"></span>01(222) 30.90.819</p>	
								<p><span class="icon-phone"></span>Extensión 119</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:sergio.chazaro@bmwvecsa.com">sergio.chazaro@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>MINI</p>
							</div>
						</div>
					</article>
					<article class="departamentos" id="menu-ventas">										
						<div class="agencia-telefono">
							<h5>Ventas Motorrad</h5>	
							<p class="tel"><span class="icon-phone"></span> 01(222) 268.62.70</p>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Raúl Ortega</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>01(222) 268.62.70</p>
								<p><span class="icon-phone"></span>Extensión 215</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:raul.ortega@bmwvecsa.com">raul.ortega@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Motorrad</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Renato Tello</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>01(222) 268.62.70</p>
								<p><span class="icon-phone"></span>Extensión 216</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:renato.tello@bmwvecsa.com">renato.tello@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Motorrad</p>
							</div>
						</div>
					</article>
					<!-- SERVICIO -->
					<article class="departamentos" id="menu-servicio">
						<div class="agencia-telefono">
							<h5>Servicio</h5>
							<p class="tel"><span class="icon-phone"></span> 01(222) 268.62.70</p>
						</div>	
						<div class="vcard">
							<div class="nombre1 display">
								<p>Fernando Paz</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>01(222) 268.62.70</p>							
								<p><span class="icon-phone"></span>Extensión 221</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:fernando.paz@bmwvecsa.com">fernando.paz@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Asesor de servicio BMW | MINI</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Manuel García</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>01(222) 268.62.70</p>							
								<p><span class="icon-phone"></span>Extensión 220</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:manuel.garcia@bmwvecsa.com">manuel.garcia@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Asesor de servicio BMW | MINI</p>
							</div>
						</div>						
						<div class="vcard">
							<div class="nombre1 display">
								<p>Hector Mejía</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>Extensión: 222</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:hector.mejia@bmwvecsa.com">hector.mejia@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Asesor de servicio Motorrad</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Rogelio Hernández</p>
							</div>
							<div class="extension1 display">
								<p><span class="icon-phone"></span>01(222) 268.62.70</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:rogelio.hernandez@bmwvecsa.com">rogelio.hernandez@bmwvecsa.com</a>									
								</p>
							</div>
							<div class="marca1 display">
								<p>Gerente de Servicio</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Patricia Diyarza</p>
							</div>
							<div class="extension1 display">
								<p><span class="icon-phone"></span>01(222) 268.62.70</p>	
								<p><span class="icon-phone"></span>Extensión: 200 y 201</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:servicio.puebla@bmwvecsa.com">servicio.puebla@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Atención a clientes Postventa</p>
								<p><strong>Citas de servicio</strong></p>
							</div>
						</div>
											
					</article>
					<!-- REFACCIONES -->
					<article class="departamentos" id="menu-refacciones">
						<div class="agencia-telefono">
							<h5>Refacciones</h5>
							<p class="tel"><span class="icon-phone"></span> 01(222) 268.62.70</p>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Brenda Sánchez</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>01(222) 268.62.70</p>
								<!-- <p><span class="icon-phone"></span>Extensión: 1025</p>								 -->
							</div>
							<div class="correo1 display">
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:brenda.sanchez@bmwvecsa.com">brenda.sanchez@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Accesorios & Lifestyle</p>
							</div>
						</div>	
						<div class="vcard">
							<div class="nombre1 display">
								<p>Carlos Oliva</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>01(222) 268.62.70</p>
								<p><span class="icon-phone"></span>Extensión: 237</p>								
							</div>
							<div class="correo1 display">
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:carlos.oliva@bmwvecsa.com">carlos.oliva@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Mostrador de refacciones</p>
							</div>
						</div>	
						<div class="vcard">
							<div class="nombre1 display">
								<p>Edith Hernández</p>
							</div>
							<div class="extension1 display">								
								<!-- <p><span class="icon-phone"></span>Extensión: 1040</p>								 -->
							</div>
							<div class="correo1 display">
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:edith.hernandez@bmwvecsa.com">edith.hernandez@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Accesorios & Lifestyle</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Francisco Córtes</p>
							</div>
							<div class="extension1 display">								
								<!-- <p><span class="icon-phone"></span>Extensión: 1026</p>								 -->
							</div>
							<div class="correo1 display">
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:francisco.cortes@bmwvecsa.com">francisco.cortes@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Jefe de almacén</p>
							</div>
						</div>	
						<div class="vcard">
							<div class="nombre1 display">
								<p>Ma. Luisa Ramos</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>01(222) 268.62.70</p>
								<p><span class="icon-phone"></span>Extensión: 235</p>								
							</div>
							<div class="correo1 display">
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:mluisa.ramos@bmwvecsa.com">mluisa.ramos@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Gerente de Refacciones</p>
							</div>
						</div>				

					</article>
					<article class="departamentos" id="menu-ubicacion">
							<h5>Domicilio. Ubicación</h5>
							<div class="agencia-domicilio">
								<p><span class="icon-location"></span> Blvd. Atlixcayotl No. 5316.</p>
								<p>Col. Reserva Territorial Atlixcayotl.</p>
								<p>C.P. 72190 Puebla, Puebla.</p>
							</div>
							<div id="map-puebla"></div>
							<p><a href="https://www.google.com.mx/maps/place/BMW+Vecsa+Puebla/@19.0261275,-98.236121,18z/data=!4m2!3m1!1s0x85cfc74717cd4eb9:0x3b0cf37ec4ced582" target="_blank"><span class="icon-location2"></span>Ver ubicación en Google Maps.</a></p>
						<!-- </div> -->
					</article>
					<article class="departamentos" id="menu-horarios">
						<div class="agencia-telefono">
							<h5>Horario de atención</h5>
							<p class="negrita">Ventas</p>
							<p>Lunes a viernes: 9:00 a 20:00 hrs.</p>
							<p>Sábado: 9:00 a 16:00 hrs.</p>
							<p>Domingo: 11:00 a 16:00 hrs.</p>
							<p class="negrita">Servicio y Refacciones</p>
							<p>Lunes a viernes: 8:00 a 20:00 hrs.</p>
							<p>Sábado: 8:00 a 14:00 hrs.</p>
						</div>
					</article>
				</section>
			<!--</div>  end content-flex -->
			

		</div> <!-- end content -->		
	</div>  <!-- end container -->

	<!--footer-->
	<?php include('../includes/footer_seccion.inc.php'); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	<script src="../js/menu.js"></script>

</body>
</html>