<div class="noticias mt-5">
    <h4 class="mb-4">Enlaces externos</h4>
    <div class="row">
        <?php
        $notas = [


            [
                "url" => "https://dpip.sanluis.gov.ar/",
                "foto" => $ruta .  "/_uploads/hacienda-infraestructura/sistema-ingresos-publicos.jpg" . $head_version,
                "txt" => "Dirección Provincial de Ingresos Públicos"
            ],
            [
                "url" => "https://catastro.sanluis.gov.ar/",
                "foto" => $ruta .  "/_uploads/hacienda-infraestructura/sistema-catastro.jpg" . $head_version,
                "txt" => "Catastro y Tierras Fiscales"
            ],
            [
                "url" => "https://www.sistemacompras.sanluis.gov.ar/",
                "foto" => $ruta .  "/_uploads/hacienda-infraestructura/sistema-compras.jpg" . $head_version,
                "txt" => "Sistema Electrónico de Compras"
            ],
            [
                "url" => "https://www.sistemas-hacienda.sanluis.gov.ar/",
                "foto" => $ruta .  "/_uploads/hacienda-infraestructura/sistema-informatica.jpg" . $head_version,
                "txt" => "Dirección de Informática"
            ],

        ];

        foreach ($notas as $nota) {
            $nota_txt_encode = htmlspecialchars($nota["txt"], ENT_QUOTES, 'UTF-8');
            include $ruta_file . "_includes/elementos/nota4.php";
        }

        ?>
    </div>
</div>