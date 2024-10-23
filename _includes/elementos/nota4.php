<div class="col-lg-3 mb-3 d-flex align-items-stretch">
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