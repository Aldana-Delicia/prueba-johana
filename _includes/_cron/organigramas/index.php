<?php

$datos = array(
    array("organismo_id" => "1", "slug" => "secretaria-general"),
    array("organismo_id" => "2", "slug" => "hacienda-infraestructura"),
    array("organismo_id" => "3", "slug" => "gobierno"),
    array("organismo_id" => "4", "slug" => "salud"),
    array("organismo_id" => "5", "slug" => "educacion"),
    array("organismo_id" => "6", "slug" => "desarrollo-productivo"),
    array("organismo_id" => "7", "slug" => "desarrollo-humano"),
    array("organismo_id" => "8", "slug" => "seguridad"),
    array("organismo_id" => "9", "slug" => "turismo-cultura"),
    array("organismo_id" => "10", "slug" => "vinculacion"),
    array("organismo_id" => "11", "slug" => "legal-tecnica"),
    array("organismo_id" => "12", "slug" => "logistica"),
    array("organismo_id" => "13", "slug" => "ambiente"),
    array("organismo_id" => "14", "slug" => "institucionales"),
    array("organismo_id" => "15", "slug" => "comunicacion"),
    array("organismo_id" => "16", "slug" => "deporte"),
    array("organismo_id" => "17", "slug" => "etica"),
    array("organismo_id" => "18", "slug" => "discapacidad"),
    array("organismo_id" => "19", "slug" => "transporte"),
    array("organismo_id" => "20", "slug" => "ciencia"),
    array("organismo_id" => "21", "slug" => "fiscalia-estado"),
);


foreach ($datos as $dato) {
    echo "slug: " . $dato['slug'] . "<br>";
    echo "<br>";
    $id = $dato['organismo_id'];
    $slug = $dato['slug'];
    include "copiar_noticias.php";
}
