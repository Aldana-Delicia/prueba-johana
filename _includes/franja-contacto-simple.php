<section class="py-4 franjaGris text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5">
                <h3><?= $contacto_title ?></h3>
                <ul>
                    <li><strong>Oficina:</strong> <?= $contacto_direccion ?></li>
                    <li><strong>Código postal:</strong> <?= $contacto_cp ?></li>

                    <?php


                    if (!empty($contacto_tel)) {
                        echo '<li><strong>Teléfono:</strong> ' . $contacto_tel . '</li>';
                    }

                    if (!empty($contacto_email)) {
                        echo '<li><strong>Correo electrónico:</strong> <a class="enlaceNegro" href="mailto:' . $contacto_email . '">' . $contacto_email . '</a></li>';
                    }
                    ?>

                </ul>
                <br>

                <?php

                if (isset($redesSociales) && count($redesSociales) > 0) {
                    // Imprime el encabezado
                    echo '<h4>Contacto a través de Redes Sociales</h4>';
                    echo '<div class="social-icons">';

                    // Itera sobre cada elemento del array e imprime el contenido
                    foreach ($redesSociales as $red) {
                        echo '<a href="' . $red["url"] . '" target="_blank" class="btn btn-outline-white rounded-circle text-white"><i class="fab ' . $red["icono"] . '"></i></a>';
                    }

                    // Cierra el contenedor
                    echo '</div>';
                }
                ?>


            </div>

            <div class="col-md-6">
                <h4>Google Maps</h4>
                <a href="<?= $mapa_url ?>" target="_blank">
                    <img src="<?= $ruta ?>/_img/maps/<?= $mapa_foto ?>" alt="<?= $contacto_direccion ?>" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>