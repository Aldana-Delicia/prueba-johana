<footer class="mt-4 text-white pb-5">
    <div class="container text-center">
        <h5 class="text-center">Gobierno de la Provincia de San Luis</h5>

        <p class="small">
            <a href="<?= $ruta ?>/organigrama/" class="enlaceNegro">Organigrama</a> |
            <a href="<?= $ruta ?>/telefonos/" class="enlaceNegro">Teléfonos</a> |
            <a href="<?= $ruta ?>/redes-sociales/" class="enlaceNegro">Redes Sociales</a> |
            <a href="https://boletinoficial.sanluis.gov.ar/" class="enlaceNegro">Boletín oficial</a>
            <br>
            <a href="<?= $ruta ?>/terminos-condiciones/" class="enlaceNegro">Términos y condiciones</a> |
            <a href="<?= $ruta ?>/politica-privacidad/" class="enlaceNegro">Política de privacidad</a>
        </p>

    </div>

</footer>


<div class="offcanvas offcanvas-end" id="menuOrganismos">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title"><a href="<?= $ruta ?>/buscador/" class="btn btn-primary btn-block"><i class="fas fa-search"></i> Buscador</a> <a href="<?= $ruta ?>/redes-sociales/" class="btn btn-outline-primary btn-block">Redes Sociales</a></h2>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body pt-0 pb-0">

        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item fs-5 py-3 px-1" style="border-top: 1px solid #dee2e6;"><a href="<?= $ruta ?>/ambiente/">Ambiente y Desarrollo Sustentable</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/institucionales/">Asuntos Institucionales y Enlace</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/ciencia/">Ciencia e Innovación</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/comunicacion/">Comunicación</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/deporte/">Deporte</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/desarrollo-humano/">Desarrollo Humano</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/desarrollo-productivo/">Desarrollo Productivo</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/discapacidad/">Personas con Discapacidad</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/educacion/">Educación</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/etica/">Ética Pública y Control de Gestión</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/fiscalia-estado/">Fiscalía de Estado</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/gobierno/">Gobierno</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/hacienda-infraestructura/">Hacienda e Infraestructura</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/legal-tecnica/">Legal y Técnica</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/logistica/">Logística</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/salud/">Salud</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/secretaria-general/">Secretaría General</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/seguridad/">Seguridad</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/transporte/">Transporte</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/turismo-cultura/">Turismo y Cultura</a></li>
            <li class="list-group-item fs-5 py-3 px-1"><a href="<?= $ruta ?>/vinculacion/">Vinculación Interjurisdiccional</a></li>
        </ul>

    </div>
</div>

<button id="shareButton" aria-label="Compartir esta página">
    <i class="fas fa-share-from-square"></i>
</button>


<script>
    document.getElementById('shareButton').addEventListener('click', async () => {
        try {
            await navigator.share({
                title: '<?= $txt_titulo ?>',
                text: '<?= $txt_titulo ?>',
                url: window.location.href
            });

        } catch (error) {
            console.error('Error al compartir:', error);
        }
    });
</script>

</body>

</html>