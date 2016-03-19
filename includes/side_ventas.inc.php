<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<ul class="menu-agencia">
<p class="menu-titulo">Promociones</p>
    <!-- <li>
        <a href="index.php"><span class="icon-checkbox-checked"></span>Promoción BMW</a>
    </li> -->
    <li>
        <a href="serie220.php" <?php if ($currentPage == 'serie220.php') echo 'id="here"' ?>>
            <span class="icon-checkbox-checked"></span>BMW Serie 220
        </a>
    </li>
    <li>
        <a href="serie3.php"  <?php if ($currentPage == 'serie3.php') echo 'id="here"' ?>>
            <span class="icon-checkbox-checked"></span>BMW Serie 3
        </a>
    </li>
    <li>
        <a href="mini.php"   <?php if ($currentPage == 'mini.php') echo 'id="here"' ?>>
            <span class="icon-checkbox-checked"></span>MINI
        </a>
    </li>
    <!-- <li>
        <a href="motorrad.php"   <?php if ($currentPage == 'motorrad.php') echo 'id="here"' ?>>
            <span class="icon-checkbox-checked"></span>Motorrad
        </a>
    </li> -->
</ul>