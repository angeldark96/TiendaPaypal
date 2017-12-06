<div class="productos-container">
    <div class="productos">
        <?php foreach ($articles as $article): ?>
            <div class="producto">
                <h3 class="producto__title"><?= $article->name ?></h3>
                <a href="<?= PUBLIC_PATH . '/producto?id='. $article->id ?>">
                    <img src="<?= PUBLIC_PATH .'/img/'. $article->image ?>" class="producto__img"/>
                </a>
                <p class="producto__price icon-lupa">
                    <a href="<?= PUBLIC_PATH . '/producto?id='. $article->id ?>">Ver Detalles</a>
                </p>
            </div>
        <?php endforeach; ?>
    </div>

</div>