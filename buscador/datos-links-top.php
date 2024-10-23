<?php

$enlacesExternos = [

    [
        'url' => 'https://sanluis.gov.ar/gobierno/ong/',
        "txt" => 'Programa de Fortalecimiento Institucional de ONG\'s',
        "Keywords" => 'Formulario de inscripción para capacitaciones',
        "target" => false,
    ],


    [
        'url' => 'https://intercolegiales.sanluis.gov.ar/',
        "txt" => 'Intercolegiales 2024',
        "Keywords" => 'Juegos Intercolegiales Deportivos y Culturales',
        "target" => false,
    ],

];

foreach ($enlacesExternos as $enlace) {
    echo '<li class="list-group-item">';
    echo '<i class="fas fa-external-link-alt fa-xs me-1"></i> ';

    if ($enlace['target']) {
        echo '<a href="' . $enlace['url'] . '" target="_blank">' . $enlace['txt'] . '</a>';
    } else {
        echo '<a href="' . $enlace['url'] . '">' . $enlace['txt'] . '</a>';
    }

    echo '<br>' . $enlace['Keywords'] . '</li>';
}
