<div class="noticias mt-5">
    <h4 class="mb-4">Institucional</h4>
    <div class="row">
        <?php
        $notas = [
            [
                'url' => 'https://estadistica.sanluis.gov.ar/',
                "foto" => $ruta . "/_uploads/ciencia/estadisticas.jpg" . $head_version,
                "txt" => "Dirección de Estadísticas y Censos"
            ],
            [
                'url' => $ruta . '/ciencia/organigrama/',
                "foto" => $ruta . "/_uploads/txt_organigrama.jpg" . $head_version,
                "txt" => "Organigrama"
            ],
            [
                'url' => $ruta . '/ciencia/competencias-generales/',
                "foto" => $ruta . "/_uploads/txt_competencias_generales.jpg" . $head_version,
                "txt" => "Competencias Generales"
            ],

        ];

        foreach ($notas as $nota) {
            $nota_txt_encode = htmlspecialchars($nota["txt"], ENT_QUOTES, 'UTF-8');
            include $ruta_file . "_includes/elementos/nota3.php";
        }

        ?>
    </div>
</div>