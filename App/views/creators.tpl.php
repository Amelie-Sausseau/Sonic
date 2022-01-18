<section id="creators">
    <div class="container-fluid">
        <div class="row">
            <h1>Créateurs</h1>
            <?php
            $creators = [
                'Hirokazu Yasuhara' => 'Né le 12 octobre 1965 au Japon, c\'est un designer japonais de jeu vidéo. Ancien membre important du studio Sonic Team, il a occupé des fonctions artistiques chez Naughty Dog, et plus récemment pour Namco Bandai.',

                'Yuji Naka' => 'Yuji Naka est un développeur de jeux vidéo né le 17 septembre 1965 au Japon. Il a été programmeur principal sur le jeu Sonic the Hedgehog.Alors qu\'il est encore au lycée, il sait déjà qu\'il veut travailler dans l\'industrie des jeux vidéo. Il rentre chez Sega comme programmeur en 1984 ; son premier jeu, Girl\'s Garden, sort la même année. En 1991, il est à l\'origine, avec Naoto Oshima et Hirokazu Yasuhara, de Sonic the Hedgehog sur Mega Drive qui va rapidement devenir culte, au même titre que Mario. Il fut à la tête de l\'équipe de développement de jeux vidéo, la Sonic Team, jusqu\'au 16 mars 2006 où il quitte Sega pour fonder le studio Prope.

                En janvier 2018 il rejoint officiellement Square Enix.
                
                En juillet 2020, Square Enix annonce la création de Balan Company. Dirigé par Yuji Naka, ce nouveau studio interne à l\'éditeur japonais se spécialisera aux jeux d\'action. Le premier jeu Balan Wonderworld a été révélé lors du pré-show du Xbox Games Showcase, le 23 juillet 2020 et sortira en mars 2021.',

                'Naoto Ōshima' => 'Naoto Ōshima est un designer japonais de jeu vidéo, ancien employé de Sega, principalement connu pour avoir modelé le design de Sonic et Eggman.

                Après avoir quitté Sonic Team, Ōshima fonde un studio de développement indépendant nommé Artoon.'
            ];


            foreach ($creators as $name => $description) {
                echo '<h3 class="creatorname">' . $name . '</h3><p class="creatordetail">' . $description . '</p>';
            }


            ?>



        </div>
    </div>

</section>