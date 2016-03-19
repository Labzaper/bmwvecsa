<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']);?> 
<!--
$_SERVER['SCRIPT_FILENAME'] => PHP's built-in superglobal arrays returns the absolute file path for the current page.
The built-in PHP function basename() takes a filepath as an argument and extracts the filename. 
-->
  <ul>    
    <li><a href="../refacciones/cotizar.php" <?php if ($currentPage == 'cotizar.php') echo 'id="here"' ?> class="iconSeccion" >
        Cotizar Refacciones</a></li>
    <li><a href="../refacciones/contacto.php" <?php if($currentPage == 'contacto.php') echo 'id="here"' ?> class="iconSeccion" >
        Contáctanos</a></li>
  </ul>