<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Localización - BMW Vecsa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="BMW Grupo VECSA. Agencia de autos. Distribuidor y concesionario de las marcas BMW, MINI y Motorrad en los estados de Puebla, Veracruz, Oaxaca e Hidalgo">
	<meta name="keywords" content="BMW, BMW Puebla, BMW Veracruz, BMW Hidalgo, BMW Oaxaca, Puebla, Veracruz, Oaxaca, Hidalgo, Servicio BMW, coches, coche, servicio, taller, Serie 1, Serie 3, Serie 5, Serie 6, Serie 7, X3, X5, Z4, M3, M5, M6, motorrad, motocicletas, financial services, hojalateria, pintura">
	<meta name="copyright" content="Grupo VECSA">
	<meta name="author" content="Guillermo Cruces">
	<link rel="shortcut icon" href="../favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/secciones.css">
	<link rel="stylesheet" type="text/css" href="../css/menu-desktop.css">
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
	<script src="../js/mapa-vecsa.js"></script>	
	
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
		<img class="pic-header" src="../img/servicio/servicio02.jpg" alt="agencia Vecsa Puebla">
	</picture>
	<div class="titulo-agencia-mobile">
		<h4 class="agencia">Vecsa</h4>
	</div>
	<div class="container">
		<div class="titulo-agencia">
			<div class="frames-vecsa"><img src="../img/frames-vecsa.png"></div>
			<h4 class="agencia">Vecsa</h4>
		</div>		
		<div class="content">
			<div class="side-fixed-menu">
				<?php include('../includes/side_vecsa.inc.php'); ?>						
			</div>
			<section class="datos-agencia">				
				<div class="titulo-seccion">Localización</div>
				<div class="subcontent">
					<h4>Ubicación de las agencias de Grupo Vecsa.</h4>
					<div id="map-puebla"></div>
				</div>
			</section>		
		</div>			
	</div>  <!-- end container -->

	<!--footer-->
	<?php include('../includes/footer_seccion.inc.php'); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/menu.js"></script>

</body>
</html>