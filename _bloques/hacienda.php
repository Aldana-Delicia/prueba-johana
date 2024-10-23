<div class="noticias mt-5">
    <h4 class="mb-4">Hacienda</h4>
    <div class="row">
        <?php
        $notas = [
            [
                'url' => $ruta . '/demo-hacienda/finanzas-recursos/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/hacienda-finanzas.jpg" . $head_version,
                "txt" => "Dirección de Finanzas y Recursos"
            ],
            [
                'url' => $ruta . '/demo-hacienda/ingresos-publicos/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/hacienda-ingresos-publicos.jpg" . $head_version,
                "txt" => "Dirección Provincial de Ingresos Públicos "
            ],
            [
                'url' => $ruta . '/demo-hacienda/catastro-fiscales/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/hacienda-catastros.jpg" . $head_version,
                "txt" => "Dirección Provincial de Catastro y Tierras Fiscales"
            ],
            [
                'url' => $ruta . '/demo-hacienda/presupuesto/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/hacienda-presupuesto.jpg" . $head_version,
                "txt" => "Dirección de Presupuesto Público"
            ],
            [
                'url' => $ruta . '/demo-hacienda/compras-contrataciones/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/hacienda-compras.jpg" . $head_version,
                "txt" => "Dirección de Compras y Contrataciones"
            ],
            [
                'url' => $ruta . '/demo-hacienda/recursos-humanos/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/hacienda-recursos-humanos.jpg" . $head_version,
                "txt" => "Dirección de Recursos Humanos"
            ],
            [
                'url' => $ruta . '/demo-hacienda/contaduria-general/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/hacienda-contaduria.jpg" . $head_version,
                "txt" => "Contaduría General de la Provincia"
            ],
            [
                'url' => $ruta . '/demo-hacienda/tesoreria-general/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/hacienda-tesoreria.jpg" . $head_version,
                "txt" => "Tesorería General de la Provincia"
            ],
            [
                'url' => $ruta . '/demo-hacienda/caja-social/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/hacienda-caja-social.jpg" . $head_version,
                "txt" => "Dirección de la Caja Social y Financiera"
            ],
            [
                'url' => $ruta . '/demo-hacienda/informatica/',
                "foto" => $ruta . "/_uploads/hacienda-infraestructura/hacienda-informatica.jpg" . $head_version,
                "txt" => "Dirección de Informática"
            ],

        ];

        foreach ($notas as $nota) {
            $nota_txt_encode = htmlspecialchars($nota["txt"], ENT_QUOTES, 'UTF-8');
            include $ruta_file . "_includes/elementos/nota3.php";
        }

        ?>
    </div>
</div>