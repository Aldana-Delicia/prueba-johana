<?php
require_once('../../_includes/site_info.php');
require_once('./info.php');
require_once('../info_contacto.php');
require_once('../../_includes/head.php');
require_once('../../_includes/header.php');
require_once('../../_includes/nav.php');
require_once('../../_includes/franja-celeste-interna.php');
echo '<div class="container-fluid franjaAzure"><div class="container mt-4">';
require_once('../../_organigramas/' . $org_slug . '.php');
echo '</div></div>';
require_once('../../_includes/franja-contacto-simple.php');
require_once('../../_includes/footer.php');
