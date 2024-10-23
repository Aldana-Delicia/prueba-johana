<?php
require_once('../_includes/site_info.php');
require_once('./info.php');
require_once('../_includes/head.php');
//require_once('../_includes/header.php');
require_once('../_includes/nav.php');
?>
<section class="pt-3 franjaAzure2 sticky-top">
    <div class="container">
        <input class="form-control form-control-lg" id="filtroBuscador" type="text" placeholder="Buscar.." autofocus="" autocomplete="off">
        <br>
</section>
<section class="pb-5 franjaAzure">
    <div class="container">
        <ul class="list-group mt-3 mb-5" id="myList">
            <?php
            require_once('./datos-links-top.php');
            require_once('./datos-organigrama.php');
            require_once('./datos-links-bajo.php');
            ?>
        </ul>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/unorm/1.4.1/unorm.min.js"></script>

<script>
    $(document).ready(function() {
        $("#filtroBuscador").on("input", function() {
            var value = $(this).val().toLowerCase();
            value = normalizeString(value);

            $("#myList li").filter(function() {
                var text = normalizeString($(this).text().toLowerCase());
                $(this).toggle(text.indexOf(value) > -1);
            });
        });

        function normalizeString(str) {
            return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        }
    });
</script>
<?php
require_once('../_includes/footer.php');
?>