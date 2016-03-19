<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Pachuca BMW Vecsa</title>
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
			var myLatlng = new google.maps.LatLng(20.089595,-98.744939);
			var mapOptions = {
			zoom: 16,
			center: myLatlng
		}
			var map = new google.maps.Map(document.getElementById('map-pachuca'), mapOptions);

			var image = 'images/favicon.png';
			var marker = new google.maps.Marker({
			  position: myLatlng,
			  map: map,
			  icon: image,
			  title: 'Vecsa Pachuca'
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
		<img class="pic-header" src="../img/agencias/pachuca_agencia01.jpg" alt="agencia Vecsa Pachuca">				
	</picture>
	<div class="titulo-agencia-mobile">
		<h4>Vecsa Pachuca</h4>
	</div>
	<div class="container">	
		<div class="titulo-agencia">
			<div class="frames-vecsa"><img src="../img/frames-vecsa.png"></div>
			<h4 class="agencia">Vecsa Pachuca</h4>
		</div>
		<picture>
			<img class="picture-agencia" src="../img/agencias/pachuca_agencia01.jpg" alt="agencia Vecsa Pachuca">				
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
						<p class="tel"><span class="icon-phone"></span> 01(771) 717.25.54</p>
					</div>													
					<div class="vcard">
						<div class="nombre1 display">								
							<p>Jesus Pastelín</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1010</p>
						</div>
						<div class="correo1 display">								
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:jpastelin@bmwvecsa.com">jpastelin@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">								
							<p>BMW</p>
						</div>
					</div>						
					<div class="vcard">
						<div class="nombre1 display">								
							<p>Jorge Rojas</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1010</p>
						</div>
						<div class="correo1 display">								
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:jorge.rojas@bmwvecsa.com">jorge.rojas@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">								
							<p>BMW</p>
						</div>
					</div>
					<div class="vcard">
						<div class="nombre1 display">								
							<p>José Bolio</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1005</p>
						</div>
						<div class="correo1 display">								
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:jose.bolio@bmwvecsa.com">jose.bolio@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">								
							<p>BMW</p>
						</div>
					</div>
					<div class="vcard">
						<div class="nombre1 display">								
							<p>Nadia Arenas</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1005</p>
						</div>
						<div class="correo1 display">								
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:nadia.arenas@bmwvecsa.com">nadia.arenas@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">								
							<p>BMW</p>
						</div>
					</div>
					<div class="vcard">
						<div class="nombre1 display">								
							<p>Paola Lupio</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1010</p>
						</div>
						<div class="correo1 display">								
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:paola.pulio@bmwvecsa.com">paola.pulio@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">								
							<p>BMW</p>
						</div>
					</div>
					<div class="vcard">
						<div class="nombre1 display">								
							<p>Fabián Rubio</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1021</p>
						</div>
						<div class="correo1 display">								
							<p>
								<span class="icon-envelope"></span>
								<a href="fabian.rubio@bmwvecsa.com">fabian.rubio@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">								
							<p>MINI</p>
						</div>
					</div>
					<div class="vcard">
						<div class="nombre1 display">								
							<p>Luisa Olivarria</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1021</p>
						</div>
						<div class="correo1 display">								
							<p>
								<span class="icon-envelope"></span>
								<a href="luisa.olivarria@bmwvecsa.com">luisa.olivarria@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">								
							<p>MINI</p>
						</div>
					</div>
					<div class="vcard">
						<div class="nombre1 display">								
							<p>Jorge Michel</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1005</p>
						</div>
						<div class="correo1 display">								
							<p>
								<span class="icon-envelope"></span>
								<a href="jorge.michel@bmwvecsa.com">jorge.michel@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">								
							<p>Motorrad</p>
						</div>
					</div>
					<div class="vcard">
						<div class="nombre1 display">								
							<p>Saikeel González</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1010</p>
						</div>
						<div class="correo1 display">								
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:saikeel.gonzalez@bmwvecsa.com">saikeel.gonzalez@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">								
							<p>Gerente de ventas</p>
						</div>
					</div>
				</article>	
				<article class="departamentos" id="menu-servicio">
					<div class="agencia-telefono">
						<h5>Servicio</h5>
						<p class="tel"><span class="icon-phone"></span> 01(771) 717.25.54</p>
					</div>	
					<div class="vcard">
						<div class="nombre1 display">
							<p>Gabriela Tamayo</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1016</p>
						</div>
						<div class="correo1 display">								
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:gabriela.tamayo@bmwvecsa.com">gabriela.tamayo@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">
							<p>Asesor de servicio BMW | MINI</p>
						</div>
					</div>
					<div class="vcard">
						<div class="nombre1 display">
							<p>Mauricio Solis</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1014</p>
						</div>
						<div class="correo1 display">								
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:mauricio.solis@bmwvecsa.com">mauricio.solis@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">
							<p>Gerente de Postventa</p>
						</div>
					</div>						
				</article>
				<article class="departamentos" id="menu-refacciones">
					<div class="agencia-telefono">
						<h5>Refacciones</h5>
						<p class="tel"><span class="icon-phone"></span> 01(771) 717.25.54</p>
					</div>
					<div class="vcard">
						<div class="nombre1 display">
							<p>José Cerritos</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1040</p>
						</div>
						<div class="correo1 display">
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:jose.cerritos@bmwvecsa.com">jose.cerritos@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">
							<p>Mostrador de refacciones</p>
						</div>
					</div>
					<div class="vcard">
						<div class="nombre1 display">
							<p>Antonio González</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1004</p>
						</div>
						<div class="correo1 display">
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:antonio.gonzalez@bmwvecsa.com">antonio.gonzalez@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">
							<p>Mostrador de refacciones</p>
						</div>
					</div>
					<div class="vcard">
						<div class="nombre1 display">
							<p>Gerardo Ortega</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1004</p>
						</div>
						<div class="correo1 display">
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:gerardo.ortega@bmwvecsa.com">gerardo.ortega@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">
							<p>Almacén</p>
						</div>
					</div>
					<div class="vcard">
						<div class="nombre1 display">
							<p>Martín Vargas</p>
						</div>
						<div class="extension1 display">								
							<p><span class="icon-phone"></span>1040</p>
						</div>
						<div class="correo1 display">
							<p>
								<span class="icon-envelope"></span>
								<a href="mailto:martin.vargas@bmwvecsa.com">martin.vargas@bmwvecsa.com</a>
							</p>
						</div>
						<div class="marca1 display">
							<p>Gerente de refacciones</p>
						</div>
					</div>
				</article>
				<article class="departamentos" id="menu-ubicacion">
					<!-- <div class="agencia-telefono"> -->
						<h5>Domicilio. Ubicación</h5>
						<div class="agencia-domicilio">
							<!-- <p>Ventas - Sala de exhibición</p> -->
							<p><span class="icon-location"></span> Distribuidor Vial La Paz No. 113</p>
							<p>Col. Adolfo Lopez Mateos.</p>
							<p>C.P. 42094 Pachuca, Hidalgo.</p>
						</div>
						<div id="map-pachuca"></div>
						<p><a href="https://www.google.com.mx/maps/place/BMW+Vecsa+Pachuca/@20.0896402,-98.7447033,17z/data=!3m1!4b1!4m2!3m1!1s0x85d1a735bd70a0e5:0x6a742b49b192fa5b" target="_blank"><span class="icon-location2"></span>Ver ubicación en Google Maps.</a></p>
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