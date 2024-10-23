<div class="col-lg-4 mb-4">
    <a href="<?= $card['url'] ?>" class="card h-100 text-decoration-none">
        <div class="card h-100">
            <div class="card-body d-flex align-items-start">
                <i class="fas <?= $card['icono'] ?> fa-2x me-3 text-azul align-self-start"></i>
                <div>
                    <h5 class="card-title"><?= $card['titulo']  ?></h5>
                    <p class="card-text text-muted"><?= $card['txt'] ?></p>
                </div>
            </div>
        </div>
    </a>
</div>