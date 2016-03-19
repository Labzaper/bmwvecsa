<?php 
  $errors = array();
  $missing = array();
  //check if the form has been submitted
  if(isset($_POST['send'])) {
	  $to = 'guillermo.cruces@bmwvecsa.com, carlos.oliva@bmwvecsa.com';
	  $subject = 'Solicitud de cotización refacciones';
	  // list expected fields
	  $expected = array('nombre', 'email', 'telefono', 'chasis', 'modelo', 'comments');
	  // set required fields
	  $required = array('nombre', 'email', 'telefono', 'chasis');
	  // set default values for variables that might no exist
	  if(!isset($_POST['metodoContacto'])){
		  $_POST['metodoContacto'] = '';
	  }
	  // create additional headers
	  $headers = "From: Contacto Postventa<sistemas@bmwvecsa.com>\r\n";
	  $headers .= 'Content-Type: text/plain; charset=utf-8';	  
	  require('../includes/processmail.inc.php');
	  if($mailSent){
		  header('Location: http://bmwvecsa.com/refacciones/gracias.php');
		  exit;
	  }
  }
?>

<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Cotizar refacciones - BMW Vecsa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="BMW Grupo VECSA. Agencia de autos. Distribuidor y concesionario de las marcas BMW, MINI y Motorrad en los estados de Puebla, Veracruz, Oaxaca e Hidalgo">
	<meta name="keywords" content="BMW, BMW Puebla, BMW Veracruz, BMW Hidalgo, BMW Oaxaca, Puebla, Veracruz, Oaxaca, Hidalgo, Servicio BMW, coches, coche, servicio, taller, Serie 1, Serie 3, Serie 5, Serie 6, Serie 7, X3, X5, Z4, M3, M5, M6, motorrad, motocicletas, financial services, hojalateria, pintura">
	<meta name="copyright" content="Grupo VECSA">
	<meta name="author" content="Guillermo Cruces">
	<link rel="shortcut icon" href="../favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/secciones.css">
	<link rel="stylesheet" type="text/css" href="../css/menu-desktop.css">	
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
		<h4 class="agencia">Refacciones</h4>
	</div>
	<div class="container">
		<div class="titulo-agencia">
			<div class="frames-vecsa"><img src="../img/frames-vecsa.png"></div>
			<h4 class="agencia">Refacciones</h4>
		</div>		
		<div class="content">
			<div class="side-fixed-menu">
				<ul class="menu-agencia">
					<li>
						<a href="cotizar.php"><span class="icon-phone"></span>Cotizar refacciones</a>
					</li>
					<li>
						<a href="../agencias/puebla.php#menu-refacciones"><span class="icon-location"></span>Contacto</a>
					</li>
				</ul>					
			</div>
			<section class="datos-agencia">				
				<div class="titulo-seccion">Cotizar refacciones</div>
				<?php if(($_POST && $suspect) || ($_POST && isset($errors['mailfail']))){ ?>
					<p class="warning">Su mensaje no pudo ser enviado, favor de intentar más tarde.</p>
				<?php } 
					elseif($missing || $errors) { ?>
				<p class="warning">Favor de completar los campos requeridos:</p>
				<?php } ?>
				<form id="contacto" method="post" action="" accept-charset="UTF-8">
					<p>Favor de enviar está información, en cuanto la recibamos nos pondremos en contacto para confirmar la fecha y hora de la cita así como los requerimiento de servicio de su vehículo.</p>
					<p><span class="negrita">&#149;</span> Campos obligatorios.</p>					
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
						<label class="icon-input" for="chasis"><i class="icon-info"></i></label>
						<input placeholder="Número de serie. VIN &nbsp;&#149;" name="chasis" id="chasis" required type="text">
					</div>
					<div class="envelope-icon">
						<label class="icon-input" for="modelo"><i class="icon-key2"></i></label>
						<input placeholder="Vehículo / Modelo" name="modelo" id="modelo" type="text"
							<?php if($missing || $errors) { echo 'value="' . htmlentities($modelo, ENT_COMPAT, 'UTF-8') . '"';
	                        }?>
						>
							<?php if($missing && in_array('modelo', $missing)) { ?>
								<span class="warning">Favor de introducir el modelo del vehículo.</span>
	                		<?php } ?>
					</div>
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