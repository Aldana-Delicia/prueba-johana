<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $head_title ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $ruta ?>/_img/favicon/apple-touch-icon.png<?= $head_version ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $ruta ?>/_img/favicon/favicon-32x32.png<?= $head_version ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $ruta ?>/_img/favicon/favicon-16x16.png<?= $head_version ?>">
    <link rel="manifest" href="<?= $ruta ?>/manifest.json<?= $head_version ?>">
    <link rel="mask-icon" href="<?= $ruta ?>/_img/favicon/safari-pinned-tab.svg<?= $head_version ?>" color="#354393">
    <link rel="shortcut icon" href="<?= $ruta ?>/_img/favicon/favicon.ico<?= $head_version ?>">
    <meta name="msapplication-TileColor" content="#354393">
    <meta name="msapplication-config" content="<?= $ruta ?>/_img/favicon/browserconfig.xml<?= $head_version ?>">
    <meta name="theme-color" content="#354393">
    <meta name="description" content="<?= $head_description ?>">
    <meta property="og:description" content="<?= $head_description ?>">
    <meta property="og:title" content="<?= $head_site_name ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $ruta_actual ?>">
    <meta property="og:site_name" content="<?= $head_site_name ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image" content="<?= $ruta ?>/_img/redes/<?= $head_img_share ?><?= $head_version ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script><?php

if ($slug == "error404") {
    echo '<meta name="robots" content="noindex, follow">';
    echo '<meta http-equiv="refresh" content="15;url=https://www.sanluis.gov.ar/">';
    echo '<link rel="canonical" href="https://www.sanluis.gov.ar/">';
} else {
    echo '<link rel="canonical" href="'.$ruta_actual.'">';
}
?>
    <style>
        <?php

        include "_css/index.php";

        ?>
    </style>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7BZ52TNPGS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7BZ52TNPGS');
</script>

<body>