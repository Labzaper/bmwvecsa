<?php 
  $errors = array();
  $missing = array();
  //check if the form has been submitted
  if(isset($_POST['send'])) {
	  $to = 'patricia.romano@bmwvecsa.com, baruch.luna@bmwvecsa.com, adriana.cazabal@bmwvecsa.com'; 
	  $subject = 'Solicitud Evento Seminuevos';
	  // list expected fields
	  $expected = array('nombre', 'email', 'telefono', 'comments', 'fechaVisita', 'medioContacto');
	  // set required fields
	  $required = array('nombre', 'email', 'telefono', 'fechaVisita', 'medioContacto');
	  // set default values for variables that might no exist
	  if(!isset($_POST['metodoContacto'])){
		  $_POST['metodoContacto'] = '';
	  }
	  // create additional headers
	  $headers = "From: Evento Seminuevos<sistemas@bmwvecsa.com>\r\n";
	  $headers .= 'Content-Type: text/plain; charset=utf-8';	  
	  require('../includes/processmail.inc.php');
	  if($mailSent){
		  header('Location: http://bmwvecsa.com/registroseminuevos/gracias.php');
		  exit;
	  }
  }
?>

<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Evento Seminuevos - BMW Vecsa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="BMW Grupo VECSA. Agencia de autos. Distribuidor y concesionario de las marcas BMW, MINI y Motorrad en los estados de Puebla, Veracruz, Oaxaca e Hidalgo">
	<meta name="keywords" content="BMW, BMW Puebla, BMW Veracruz, BMW Hidalgo, BMW Oaxaca, Puebla, Veracruz, Oaxaca, Hidalgo, Servicio BMW, coches, coche, servicio, taller, Serie 1, Serie 3, Serie 5, Serie 6, Serie 7, X3, X5, Z4, M3, M5, M6, motorrad, motocicletas, financial services, hojalateria, pintura">
	<meta name="copyright" content="Grupo VECSA">
	<meta name="author" content="Guillermo Cruces">
	<link rel="shortcut icon" href="../favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/secciones.css">
	<link rel="stylesheet" type="text/css" href="../css/menu-desktop.css">	
	<style type="text/css">
		h5 {
			font-size: 1em;
			margin: .8em 0;
		}
		.color-gris
		{
			color: #747675;
		}
		.padding-top-1
		{
		    padding-top: 1em;
		}
		.seminuevos-header
		{
			background: #FFF;
			font-size: 1.1em;
			margin-top: 2em;
			margin-bottom: 1em;
			/*padding: .6em 0;*/
			width: 100%;
		}
		.semi-mini, .semi-bmw
		{
			padding: .3em 1em;
			/*font-weight: bold;*/
			color: #FFF;
			font-size: 1.2em;
			margin: .2em 0;
		}
		.semi-mini
		{
			background: #000;
		}
		.semi-bmw
		{
			background: #747675;
		}

	</style>
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
		<img class="pic-header" src="../img/promociones/vecsa_seminuevos_1200px.jpg" alt="vecsa seminuevos">
	</picture>
	<div class="titulo-agencia-mobile">
		<h4 class="agencia">Venta Especial Seminuevos</h4>
	</div>
	<div class="container">
		<div class="titulo-agencia">
			<div class="frames-vecsa"><img src="../img/frames-vecsa.png"></div>
			<h4 class="agencia">Venta Especial Seminuevos</h4>
		</div>	
		<picture>
			<img class="picture-agencia" src="../img/promociones/vecsa_seminuevos_1200px.jpg" alt="vecsa seminuevos">		
		</picture>
		<div class="content">
			<div class="side-fixed-menu">
				<div class="menu-agencia">
					<h4 class="side-info">Vecsa sucursal Esteban de Antuñano.</h4>				
					<p class="side-info">Domicilio: Boulevard Esteban de Antuñano #354.</p>
					<p class="side-info">Col. José Abascal.</p>
					<p class="side-info">Heroica Puebla de Zaragoza, Puebla.</p>
					<p class="side-info">01 (222) 268.62.70</p>
					<a href="https://www.google.com.mx/maps/place/BMW/@19.0822547,-98.2384886,20z/data=!4m2!3m1!1s0x0000000000000000:0x6641d050681f2de1" target="_blank" class="negrita"><span class="icon-location"></span>Ver mapa de ubicación</a>
				</div>
			</div>
			<section class="datos-agencia">				
				<div class="seminuevos-header">
					<p class="semi-bmw">BMW PREMIUM SELECTION. SEMINUEVOS CERTIFICADOS.</p>
					<P class="semi-mini">MINI NEXT. SEMINUEVOS CERTIFICADOS.</P>
					<!-- Seminuevos Certificados &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; BMW y MINI Cooper &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 15, 16 y 17 de Abril. -->
				</div>
				<?php if(($_POST && $suspect) || ($_POST && isset($errors['mailfail']))){ ?>
					<p class="warning">Su mensaje no pudo ser enviado, favor de intentar más tarde.</p>
				<?php } 
					elseif($missing || $errors) { ?>
				<p class="warning">Favor de completar los campos requeridos:</p>
				<?php } ?>
				<form id="contacto" method="post" action="" accept-charset="UTF-8">
					<h3>Lo invitamos a nuestra <span class="color-gris">VENTA ESPECIAL</span> de autos SEMINUEVOS CERTIFICADOS (BMW Premium Selection y MINI NEXT).</h3>
					<p>Venga a conocer el inventario más grande y lujoso de la república. Extraordinarios beneficios y atractivos planes de financiamiento para usted.</p>
					<h3 class="color-gris padding-top-1">Fecha: 15, 16 y 17 de abril 2016.</h3>
					<p>Regístrese y reciba un beneficio extra en su cotización.</p>
					<p class="padding-top-1">Si viene de otra ciudad, formalizando su compra le reembolsamos sus viáticos. (Aplican Restricciones)</p>
					<p>Ubicación: Vecsa sucursal Esteban de Antuñano.</p>
					<p class="padding-top-1"><span class="negrita">&#149;</span> Campos obligatorios.</p>					
					<div class="envelope-icon">
						<label class="icon-input" for="nombre"><i class="icon-user"></i></label>
						<input placeholder="Nombre completo &nbsp;&#149;" name="nombre" id="nombre" required type="text"
							<?php if($missing || $errors){
									echo 'value="' . htmlentities($nombre, ENT_COMPAT, 'UTF-8') . '"';
							}?>
						>
					</div>
							<?php if($missing && in_array('nombre', $missing)) { ?>
	                		<span class="warning">Favor de introducir su nombre.</span>
	                		<?php } ?>
					<div class="envelope-icon">
						<label class="icon-input" for="email"><i class="icon-envelope"></i></label>
						<input placeholder="Correo Electrónico &nbsp;&#149;" name="email" id="email" required type="email" autocapitalize="off"
							<?php if($missing || $errors){
								echo 'value="' . htmlentities($email, ENT_COMPAT, 'UTF-8') . '"'; } ?>
						>
							<?php if($missing && in_array('email',$missing)) { ?>
							<br />
							<span class="warning">Favor de introducir su email.</span>
							<?php } elseif (isset($errors['email'])) {?>
							<span class="warning">Dirección de correo inválida</span>
							<?php } ?>
					</div>
					<div class="envelope-icon">
						<label class="icon-input" for="telefono"><i class="icon-phone"></i></label>
						<input placeholder="Teléfono &nbsp;&#149;" name="telefono" id="telefono" required type="text"
							<?php if($missing || $errors){
	                             echo 'value="' . htmlentities($telefono, ENT_COMPAT, 'UTF-8') . '"'; } ?>
						>
							<?php if($missing && in_array('telefono', $missing)) { ?>
			                <br />
			                <span class="warning">Favor de introducir su teléfono de contacto.</span>
			                <?php } ?>
					</div>
					<!-- Fecha visita -->
					<div class="envelope-icon">
						<p>¿En que fecha nos visitará?</p>
						<label class="icon-input" for="fechaVisita"><i class="icon-phone"></i></label>
						<select name="fechaVisita" id="fechaVisita" required>
							<option value=""
								<?php if(!$_POST || $_POST['fechaVisita'] == '') {
									echo 'selected';
								} ?>
							>Seleccionar
							</option>
							<option value="15"
								<?php if($_POST && $_POST['fechaVisita'] == '15') {
									echo 'selected';
								} ?>
							>15 de Abril</option>
							<option value="16"
								<?php if($_POST && $_POST['fechaVisita'] == '16') {
									echo 'selected';
								} ?>
							>16 de Abril</option>
							<option value="17"
								<?php if($_POST && $_POST['fechaVisita'] == '17') {
									echo 'selected';
								} ?>
							>17 de Abril</option>
						</select>
					</div>
					<!-- Medio de contacto -->
					<div class="envelope-icon">
						<p>¿Cómo se enteró del evento?</p>
						<label class="icon-input" for="medioContacto"><i class="icon-phone"></i></label>
						<select name="medioContacto" id="medioContacto" required>
							<option value=""
								<?php if(!$_POST || $_POST['medioContacto'] == '') {
									echo 'selected';
								} ?>
							>Seleccionar
							</option>
							<option value="Email"
								<?php if($_POST && $_POST['medioContacto'] == 'Email') {
									echo 'selected';
								} ?>
							>Email</option>
							<option value="Radio"
								<?php if($_POST && $_POST['medioContacto'] == 'Radio') {
									echo 'selected';
								} ?>
							>Radio</option>
							<option value="Facebook"
								<?php if($_POST && $_POST['medioContacto'] == 'Facebook') {
									echo 'selected';
								} ?>
							>Facebook</option>
							<option value="Autoplaza"
								<?php if($_POST && $_POST['medioContacto'] == 'Autoplaza') {
									echo 'selected';
								} ?>
							>Autoplaza</option>
							<option value="Otro"
								<?php if($_POST && $_POST['medioContacto'] == 'Otro') {
									echo 'selected';
								} ?>
							>Otro</option>
						</select>
					</div>

					<!-- Comentarios -->
					<label for="comments" class="label-comments">Comentarios:</label>
					<textarea placeholder="Comentarios" name="comments" id="comments">
							<?php if($missing || $errors){
								echo htmlentities($comments, ENT_COMPAT, 'UTF-8'); } ?>
					</textarea>
							<?php if($missing && in_array('comments',$missing)) { ?>
			                <br />
			                <span class="warning">Favor de introducir sus comentarios.</span>
			                <?php } ?>			        
					<button type="submit" id="send" name="send">Enviar</button>

					<p class="aviso-privacidad"><a href="../vecsa/legal.php" target="_blank">Consulta nuestro <strong>Aviso de Privacidad</strong>.</a></p>
				</form>				
			</section>			
		</div>			
	</div>  <!-- end container -->

	<!--footer-->
	<?php include('../includes/footer_seccion.inc.php'); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	<script src="../js/menu.js"></script>

</body>
</html>