<div class="col-md-6 mb-3">
    <div class="card">
        <a href="<?= $nota["url"] ?>">
            <img src="<?= $nota["foto"] ?>" class="card-img-top" alt="<?= $nota_txt_encode ?>">
        </a>
        <div class="card-body d-flex flex-column">
            <a href="<?= $nota["url"] ?>" class="enlaceTxt">
                <h5 class="card-title"><?= $nota["txt"] ?></h5>
            </a>
        </div>
    </div>
</div>