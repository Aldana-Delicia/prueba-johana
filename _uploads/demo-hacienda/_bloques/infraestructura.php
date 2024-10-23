<div class="noticias mt-5">
    <h4 class="mb-4">Infraestructura</h4>
    <div class="row">
        <?php
        $notas = [
            [
                'url' => $ruta . '/demo-hacienda/vialidad/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/infraestructura-vialidad.jpg" . $head_version,
                "txt" => "Dirección Provincial de Vialidad"
            ],
            [
                'url' => $ruta . '/demo-hacienda/ente-control-rutas/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/infraestructura-control-rutas.jpg" . $head_version,
                "txt" => "Dirección del Ente Control de Rutas "
            ],
            [
                'url' => $ruta . '/demo-hacienda/arquitectura-viviendas/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/infraestructura-arquitectura.jpg" . $head_version,
                "txt" => "Dirección de Obras de Arquitectura y Viviendas"
            ],
            [
                'url' => $ruta . '/demo-hacienda/hidrica-energetica/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/infraestructura-hidrica.jpg" . $head_version,
                "txt" => "Dirección de Infraestructura Hídrica y Energética"
            ],


        ];

        foreach ($notas as $nota) {
            $nota_txt_encode = htmlspecialchars($nota["txt"], ENT_QUOTES, 'UTF-8');
            include $ruta_file . "_includes/elementos/nota3.php";
        }

        ?>
    </div>
</div>