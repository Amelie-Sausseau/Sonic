<section>
    <div class="container-fluid">
    <h1>Quelques jeux</h1>
        <div class="row">
            <?php foreach ($viewVars['games'] as $currentGame) : ?>
                <!-- games -->
                <table class="games-details">
                    <td class="img-fluid"><img src="<?= $router->url($currentGame->getPicture()); ?>" alt="<?= $currentGame->getName(); ?>" class="product"></td>
                    <td>
                        <h3><?= $currentGame->getName(); ?></h3>
                    </td>
                    <td>
                        <aside><?= $currentGame->getRelease(); ?></aside>
                    </td>
                    <td>
                        <span><?= $currentGame->getConsole(); ?></span>
                    </td>
                </table>
                <!-- /games -->
            <?php endforeach; ?>
        </div>
    </div>
</section>
