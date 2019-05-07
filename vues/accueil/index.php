<div id="global">
    <?php foreach($recettes as $recette) { ?>
        <article>
            <header>
                <img class="imgRecette" src="img/<?= $recette["photo"] ?>" width="300px" height="242px" alt="<?= $recette["titre"] ?>" />
                <a href="index.php?controller=recette&action=recette&id=<?= $recette["id"] ?>">
                    <h1 class="titreRecette">
                        <?= $recette["titre"] ?>
                    </h1>
                </a>
                <time>
                    <?= $recette["dateCreation"] ?>
                </time>
            </header>
            <p><?= $recette["description"] ?></p>
        </article>
    <?php } ?>
    <hr />
</div>