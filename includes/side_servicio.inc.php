<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); 
/*
$_SERVER['SCRIPT_FILENAME'] => PHP's built-in superglobal arrays returns the absolute file path for the current page.

The built-in PHP function basename() takes a filepath as an argument and extracts the filename. 
*/
?>
  <ul>    
    <li><a href="../servicio/cita.php" <?php if ($currentPage == 'cita.php') echo 'id="here"' ?> class="iconSeccion" >
        Solicitar una cita de servicio</a></li>
    <li><a href="../servicio/quejas.php" <?php if($currentPage == 'quejas.php') echo 'id="here"' ?> class="iconSeccion" >
        Quejas y Sugerencias</a></li>
    <li><a href="../servicio/programas.php" <?php if($currentPage == 'programas.php' || $currentPage == 'programas01.php'  || $currentPage == 'programas02.php' || $currentPage == 'programas03.php') echo 'id="here"' ?> class="iconSeccion" >
        Programas y Servicios</a></li>
    <li><a href="../servicio/contacto.php" <?php if($currentPage == 'contacto.php') echo 'id="here"' ?> class="iconSeccion" >
        Contacto</a></li>
  </ul>
<!--end menu_side-->

    <!--<li><a href="../servicio/estatus.php" Revisar el estatus de su vehículo</a></li>-->
    <!--<li><a href="../servicio/promociones.php" Promociones de servicio</a></li>-->
    <!--<li><a href="../servicio/paquetes.php" Paquetes de Servicio</a></li>-->