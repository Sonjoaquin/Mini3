<div class="container">
    <h2>Todas las preguntas</h2>
    <?php if (count($this->preguntas) == 0) : ?>
        <p>No tenemos preguntas en la base de datos</p>
    <?php else : ?>
        <p>Tenemos <?= count($this->preguntas)?> preguntas en la base de datos</p><br>
    <?php foreach ($this->preguntas as $pregunta) : ?>
        <article class="pregunta">
            <h3><?= $pregunta->asunto ?></h3>
            <p><?= $pregunta->cuerpo ?></p>
        </article>
    <?php endforeach ?>
    <?php endif ?>


</div>