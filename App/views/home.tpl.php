  <section>
    <div class="container-fluid">
    <h1>Les personnages</h1>
      <div class="row">
        <?php foreach ($viewVars['characters'] as $currentCharacter) : ?>
          <!-- characters-->
          <table class="character-details">
            <td class="img-fluid"><img src="<?= $router->url($currentCharacter->getPicture()); ?>" alt="<?= $currentCharacter->getName(); ?>" class="product"></td>
            <td>
              <p><?= $currentCharacter->getTypeName(); ?></p>
            </td>
            <td>
              <h3><?= $currentCharacter->getName(); ?></h3>
            </td>
            <td><span><?= $currentCharacter->getDescription(); ?></span></td>
          </table>
          <!-- /characters-->
        <?php endforeach; ?>
      </div>
    </div>
  </section>