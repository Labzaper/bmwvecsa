
<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); 
?>
  <ul>
    <li><a href="../hyp/concepto.php" <?php if ($currentPage == 'concepto.php') echo 'id="here"' ?> class="iconSeccion" >
    	Concepto CRC</a></li>
    <li><a href="../hyp/servicios.php" <?php if($currentPage == 'servicios.php') echo 'id="here"' ?> class="iconSeccion" >
    	Servicios</a></li>
    <li><a href="../hyp/garantia.php" <?php if($currentPage == 'garantia.php') echo 'id="here"' ?> class="iconSeccion" >
    	Garantía y Refacciones</a></li>
    <li><a href="../hyp/localizacion.php" <?php if($currentPage == 'localizacion.php') echo 'id="here"' ?> class="iconSeccion" >
    	Localización</a></li>
    <li><a href="../hyp/contacto.php" <?php if($currentPage == 'contacto.php') echo 'id="here"' ?> class="iconSeccion" >
    	Contacto</a></li>
    <!-- <li><a href="../hyp/promociones.php" <?php if($currentPage == 'promociones.php') echo 'id="here"' ?> class="iconSeccion" >
    Promociones</a></li> -->
  </ul>