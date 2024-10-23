<?php

// Verifica si el host es "www.sanluis.gov.ar"
if ($_SERVER['HTTP_HOST'] == 'www.sanluis.gov.ar') {
    // Obtiene la URL sin el prefijo "www"
    $ruta_actual = "https://sanluis.gov.ar" . $_SERVER["REQUEST_URI"];
    // Redirecciona a la nueva URL
    header("Location: $ruta_actual", true, 301);
    exit();
}

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $ruta = "http://localhost/2024/SanLuisGov";
    //$ruta_file = 'D:/xampp2022/htdocs/2024/SanLuisGov/';
    $ruta_file = 'D:/xampp/htdocs/2024/SanLuisGov/';
    $ruta_actual = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
} else {
    $ruta = "https://sanluis.gov.ar";
    //$ruta_file = '/home/sanluis/public_html/SanLuisGov/';
    $ruta_file = '/var/www/sanluisgov/';
    $ruta_actual = "https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}

$contacto_title = "Contacto";
$head_version  = "?v1";
