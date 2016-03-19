<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Veracruz - BMW Vecsa</title>
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
			var myLatlng = new google.maps.LatLng(19.140657, -96.116638);
			var mapOptions = {
			zoom: 16,
			center: myLatlng
		}
			var map = new google.maps.Map(document.getElementById('map-veracruz'), mapOptions);

			var image = 'images/favicon.png';
			var marker = new google.maps.Marker({
			  position: myLatlng,
			  map: map,
			  icon: image,
			  title: 'Vecsa Veracruz'
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
		<img class="pic-header" src="../img/agencias/veracruz_agencia01.jpg" alt="agencia Vecsa Veracruz">				
	</picture>
	<div class="titulo-agencia-mobile">
		<h4>Vecsa Veracruz</h4>
	</div>
	<div class="container">	
		<div class="titulo-agencia">
			<div class="frames-vecsa"><img src="../img/frames-vecsa.png"></div>
			<h4 class="agencia">Vecsa Veracruz</h4>
		</div>
		<picture>
			<img class="picture-agencia" src="../img/agencias/veracruz_agencia01.jpg" alt="agencia Vecsa Veracruz">				
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
							<h5>Ventas</h5>	
							<p class="tel"><span class="icon-phone"></span> 01(229) 923.60.30</p>
						</div>												
						<div class="vcard">
							<div class="nombre1 display">
								<p>César Bonada Uribe</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>2117</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:cesar.bonada@bmwvecsa.com">cesar.bonada@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>	
						<div class="vcard">
							<div class="nombre1 display">
								<p>Gabriela Treviño Durán</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>2116</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:gaby.trevino@bmwvecsa.com">gaby.trevino@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>	
						<div class="vcard">
							<div class="nombre1 display">
								<p>Javier Arfaczad Sánchez</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>2117</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:javier.arfaczad@bmwvecsa.com">javier.arfaczad@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>	
						<div class="vcard">
							<div class="nombre1 display">
								<p>Octavio Saucedo</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>2117</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:octavio.saucedo@bmwvecsa.com">octavio.saucedo@bmwvecsa.com</a>									
								</p>
							</div>
							<div class="marca1 display">
								<p>BMW</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Denisse Lozada Sierra</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>2111</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:denisse.lozada@bmwvecsa.com">denisse.lozada@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>MINI</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Ivonne Gallardo Rivas</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>2109</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:ivonne.gallardo@bmwvecsa.com">ivonne.gallardo@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>MINI</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>José Luis Cepeda Martínez</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>2122</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="hide icon-envelope"></span>
									<a href="mailto:joseluiscepeda@bmwvecsa.com">joseluiscepeda@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Motorrad</p>
							</div>
						</div>
					</article>	
					<article class="departamentos" id="menu-servicio">
						<div class="agencia-telefono">
							<h5>Servicio</h5>
							<p class="tel"><span class="icon-phone"></span> 01(229) 923.60.30</p>
						</div>	
						<div class="vcard">
							<div class="nombre1 display">
								<p>Erika Castillo Ambrosio</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>Directo: 01(229) 923.60.49</p>							
								<p><span class="icon-phone"></span>Extensión: 2119</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:erika.castillo@bmwvecsa.com">erika.castillo@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Asesor de servicio BMW | MINI</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Heidi Lagunes Martínez</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>Directo: 01(229) 923.60.56</p>							
								<p><span class="icon-phone"></span>Extensión: 2104</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:heidi.lagunes@bmwvecsa.com">heidi.lagunes@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Asesor de servicio BMW | MINI</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>José Alberto Jorge Lemus</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>Directo: 01(229) 923.60.30 al 59</p>							
								<p><span class="icon-phone"></span>Extensión: 2124</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:alberto.lemus@bmwvecsa.com">alberto.lemus@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Asesor de servicio Motorrad</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Ricardo Guevara Ortigoza</p>
							</div>
							<div class="extension1 display">	
								<p><span class="icon-phone"></span>Extensión: 2224</p>
							</div>
							<div class="correo1 display">								
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:ricardo.guevara@bmwvecsa.com">ricardo.guevara@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Gerente de Servicio</p>
							</div>
						</div>						
					</article>
					<article class="departamentos" id="menu-refacciones">
						<div class="agencia-telefono">
							<h5>Refacciones</h5>
							<p class="tel"><span class="icon-phone"></span> 01(229) 923.60.30</p>
						</div>						
						<div class="vcard">
							<div class="nombre1 display">
								<p>José Pablo Muñoz Rojas</p>
							</div>
							<div class="extension1 display">
								<p><span class="icon-phone"></span>Directo: 01(229) 923.60.55</p>							
								<p><span class="icon-phone"></span>Extensión: 2130</p>
							</div>
							<div class="correo1 display">
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:pablo.munoz@bmwvecsa.com">pablo.munoz@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Ventas Talleres Externos</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Nelson Trinidad Velázquez</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>2121 | 2223</p>
							</div>
							<div class="correo1 display">
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:nelson.trinidad@bmwvecsa.com">nelson.trinidad@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Almacén refacciones</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>Rosa Armas Cruz</p>
							</div>
							<div class="extension1 display">
								<p><span class="icon-phone"></span>Directo: 01(229) 923.60.55</p>							
								<p><span class="icon-phone"></span>Extensión: 2222</p>
							</div>
							<div class="correo1 display">
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:rosa.armas@bmwvecsa.com">rosa.armas@bmwvecsa.com</a>
								</p>
							</div>
							<div class="marca1 display">
								<p>Ventas de Mostrador</p>
							</div>
						</div>
						<div class="vcard">
							<div class="nombre1 display">
								<p>José Alfredo Lara Rivera</p>
							</div>
							<div class="extension1 display">								
								<p><span class="icon-phone"></span>2125</p>
							</div>
							<div class="correo1 display">
								<p>
									<span class="icon-envelope"></span>
									<a href="mailto:jose.lara@bmwvecsa.com">jose.lara@bmwvecsa.com</a>
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
								<p><span class="icon-location"></span> Paseo Ejército Mexicano No. 157</p>
								<p>Col. Ylang Ylang.</p>
								<p>C.P. 94298 Boca del Río, Veracruz.</p>
							</div>
							<div id="map-veracruz"></div>
							<p><a href="https://www.google.com.mx/maps/place/VECSA+Veracruz/@19.140777,-96.116537,20z/data=!4m5!1m2!2m1!1sBMW+Vecsa+veracruz!3m1!1s0x0000000000000000:0x76663106c81309ad" target="_blank"><span class="icon-location2"></span>Ver ubicación en Google Maps.</a></p>
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