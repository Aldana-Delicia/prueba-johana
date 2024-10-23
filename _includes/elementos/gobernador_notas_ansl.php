<div class="noticias my-5">
    <h4 class="mb-4">Noticias del Gobernador Claudio Poggi en ANSL</h4>
    <div class="row">
        <?php

        foreach ($notas as $nota) {
            $nota_txt_encode = htmlspecialchars($nota["txt"], ENT_QUOTES, 'UTF-8');
            include $ruta_file . "_includes/elementos/nota3.php";
        }

        ?>

    </div>
    <h5 class="my-4 text-secondary"><a href="<?= $ansl_url ?>" target=" _blank">Más noticias en ANSL</a> »</h5>
</div>