<div class="noticias mt-5">
    <h4 class="mb-4">Institucional</h4>
    <div class="row">
        <?php
        $notas = [
            [
                'url' => $ruta . '/ambiente/competencias-generales/',
                "foto" => $ruta . "/_uploads/txt_competencias_generales.jpg" . $head_version,
                "txt" => "Competencias Generales"
            ],
            [
                'url' => $ruta . '/ambiente/organigrama/',
                "foto" => $ruta . "/_uploads/txt_organigrama.jpg" . $head_version,
                "txt" => "Organigrama"
            ],
            [
                'url' => 'https://ambiente.sanluis.gov.ar/',
                "foto" => $ruta . "/_uploads/txt_sitioweb.jpg" . $head_version,
                "txt" => "Sitio Web"
            ],

        ];

        foreach ($notas as $nota) {
            $nota_txt_encode = htmlspecialchars($nota["txt"], ENT_QUOTES, 'UTF-8');
            include $ruta_file . "_includes/elementos/nota3.php";
        }

        ?>
    </div>
</div>