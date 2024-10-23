<div class="col-lg-4 mb-4">
    <a href="<?= $card["url"] ?>" class="card h-100 text-decoration-none">
        <div class="card h-100">
            <div class="card-header card-celeste">
                <i class="fas <?= $card["icono"] ?> fa-5x mb-3 pt-3"></i>
            </div>
            <div class="card-body text-center">
                <h3 class="card-title"><?= $card["titulo"] ?></h3>
                <p class="card-text text-muted"><?= $card["txt"] ?></p>
            </div>
        </div>
    </a>
</div>