<?php

$datos = array(
    array("ansl_id" => "38748", "slug" => "secretaria-general", "ansl_url" => "https://agenciasanluis.com/categoria/ministerio/secretaria-general/"),
    array("ansl_id" => "38749", "slug" => "hacienda-infraestructura", "ansl_url" => "https://agenciasanluis.com/categoria/ministerio/hacienda-infraestructura/"),
    array("ansl_id" => "38750", "slug" => "gobierno", "ansl_url" => "https://agenciasanluis.com/categoria/ministerio/gobierno/"),
    array("ansl_id" => "38756", "slug" => "salud", "ansl_url" => "https://agenciasanluis.com/categoria/ministerio/salud/"),
    array("ansl_id" => "38753", "slug" => "educacion", "ansl_url" => "https://agenciasanluis.com/categoria/ministerio/educacion/"),
    array("ansl_id" => "38757", "slug" => "desarrollo-productivo", "ansl_url" => "https://agenciasanluis.com/categoria/ministerio/desarrollo-productivo/"),
    array("ansl_id" => "38754", "slug" => "desarrollo-humano", "ansl_url" => "https://agenciasanluis.com/categoria/ministerio/desarrollo-humano/"),
    array("ansl_id" => "63023", "slug" => "seguridad", "ansl_url" => "https://agenciasanluis.com/categoria/ministerio/seguridad/"),
    array("ansl_id" => "60644", "slug" => "turismo-cultura", "ansl_url" => "https://agenciasanluis.com/categoria/ministerio/turismo-cultura/"),
    array("ansl_id" => "77504", "slug" => "vinculacion", "ansl_url" => "https://agenciasanluis.com/categoria/secretaria/vinculacion/"),
    array("ansl_id" => "77501", "slug" => "legal-tecnica", "ansl_url" => "https://agenciasanluis.com/categoria/secretaria/legal-tecnica/"),
    array("ansl_id" => "38762", "slug" => "logistica", "ansl_url" => "https://agenciasanluis.com/categoria/secretaria/logistica/"),
    array("ansl_id" => "54940", "slug" => "ambiente", "ansl_url" => "https://agenciasanluis.com/categoria/secretaria/ambiente/"),
    array("ansl_id" => "77502", "slug" => "institucionales", "ansl_url" => "https://agenciasanluis.com/categoria/secretaria/institucionales/"),
    array("ansl_id" => "69832", "slug" => "comunicacion", "ansl_url" => "https://agenciasanluis.com/categoria/secretaria/comunicacion/"),
    array("ansl_id" => "38761", "slug" => "deporte", "ansl_url" => "https://agenciasanluis.com/categoria/secretaria/deporte/"),
    array("ansl_id" => "77503", "slug" => "etica", "ansl_url" => "https://agenciasanluis.com/categoria/secretaria/etica/"),
    array("ansl_id" => "77505", "slug" => "discapacidad", "ansl_url" => "https://agenciasanluis.com/categoria/secretaria/discapacidad/"),
    array("ansl_id" => "45707", "slug" => "transporte", "ansl_url" => "https://agenciasanluis.com/categoria/secretaria/transporte/"),
    array("ansl_id" => "38755", "slug" => "ciencia", "ansl_url" => "https://agenciasanluis.com/categoria/ministerio/ciencia/"),
    array("ansl_id" => "38765", "slug" => "fiscalia-estado", "ansl_url" => "https://agenciasanluis.com/categoria/organismos/fiscalia-estado/"),
    array("ansl_id" => "78094", "slug" => "gobernador", "ansl_url" => "https://agenciasanluis.com/categoria/gobernador/"),
    array("ansl_id" => "78095", "slug" => "vicegobernador", "ansl_url" => "https://agenciasanluis.com/categoria/vicegobernador/"),
    array("ansl_id" => "80435", "slug" => "ong", "ansl_url" => "https://agenciasanluis.com/categoria/ministerio/gobierno/ong/"),
    array("ansl_id" => "78094", "slug" => "home", "ansl_url" => "https://agenciasanluis.com/"),
);


foreach ($datos as $dato) {
    echo "slug: " . $dato['slug'] . "<br>";
    echo "ansl_url: " . $dato['ansl_url'] . "<br>";
    echo "<br>";
    $id = $dato['ansl_id'];
    $slug = $dato['slug'];
    $ansl_url = $dato['ansl_url'];
    include "copiar_noticias.php";
}
