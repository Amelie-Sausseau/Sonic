<section id="creators">
    <div class="container-fluid">
        <div class="row">
            <h1>Quelques jeux</h1>
            <?php foreach ($viewVars['games'] as $currentGame) : ?>
                <!-- games -->
                <table class="character-details">
                    <td class="img-fluid"><img src="<?= $router->url($currentGame->getPicture()); ?>" alt="<?= $currentGame->getName(); ?>" class="product" width="10%"></td>
                    <td>
                        <h3><?= $currentGame->getName(); ?></h3>
                    </td>
                    <td>
                        <aside><?= $currentGame->getRelease(); ?></aside>
                    </td>
                    <td>
                        <aside><?= $currentGame->getConsole(); ?></aside>
                    </td>
                </table>
                <!-- /games -->
            <?php endforeach; ?>
        </div>
    </div>
</section>