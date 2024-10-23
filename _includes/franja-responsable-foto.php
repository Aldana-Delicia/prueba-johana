<div class="container-fluid franjaClaro">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-2" style="width: 180px;">
                <img src="<?= $ruta ?>/_img/funcionarios/<?= $responsable_foto ?>" alt="<?= $responsable_nombre ?>" class="img-fluid" width="150">
            </div>
            <div class="col-md-10 pt-3 d-flex align-items-center">
                <div>
                    <h1><?= $responsable_nombre ?></h1>
                    <h3><?= $responsable_cargo ?></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-2">
        <p><?= $responsable_competencia ?></p>
        <h4 class="pt-3">Más información</h4>
        <div class="d-none d-md-block">
        <p><?php
        foreach ($mas_informacion as $info) {
            $target = $info["target"] ? ' target="_blank"' : '';
            echo '<a href="' . $info["url"] . '" class="btn btn-outline-secondary btn-block"' . $target . '>' . $info["txt"] . '</a>' . "\n";
        }
        ?></p>
        </div>
    
      <div class="d-grid gap-3 pb-5 pt-2 d-md-none">
      <?php
        foreach ($mas_informacion as $info) {
            $target = $info["target"] ? ' target="_blank"' : '';
            echo '<a href="' . $info["url"] . '" class="btn btn-outline-secondary btn-block"' . $target . '>' . $info["txt"] . '</a>' . "\n";
        }
       ?>
     </div>
</div>
</div>