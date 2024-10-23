<?php

$enlacesExternos = [
    [
        'url' => 'https://dpip.sanluis.gov.ar/',
        "txt" => 'DPIP Dirección Provincial de Ingresos Públicos',
        "Keywords" => 'Rentas, Impuesto inmobiliario, automotores',
        "target" => false,
    ],
    [
        'url' => 'https://dosep.sanluis.gob.ar/',
        "txt" => 'DOSEP Web',
        "Keywords" => 'Prestadores, Delegaciones, Cartilla Medica, Farmacias',
        "target" => true,
    ],
    [
        'url' => 'https://sanluis.gov.ar/vinculacion/casa-sanluis-buenos-aires/',
        "txt" => 'Casa de San Luis en Buenos Aires',
        "Keywords" => 'Azcuénaga 1087, CABA',
        "target" => false,
    ],
    [
        'url' => 'https://sanluis.app/escritura/',
        "txt" => 'Programa “Escriturá tu casa”',
        "Keywords" => 'Formulario de inscripción',
        "target" => false,
    ]
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
