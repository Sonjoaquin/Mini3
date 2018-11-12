<div class="container">
    <h2> <?= $this->detalles->track?> </h2>
    <p>Artista:<br> <?= $this->detalles->artist?> </p>
    <p>URL:<br> <a href="<?= $this->detalles->link ?>"><?= $this->detalles->link ?></a> </p>
    <p><a href="/canciones/listar">&lt;== Volver al listado de canciones</a> </p>
</div>