<?php
include_once("./pages/header.inc.php");
?>

<body>
    <header>
        <a href="./index.php"><img src="./assets/ligue64.png" alt="streaming"></a>
        <h1>Maison des ligues - tous les sports</h1>
        <a href="./Connexion.php" class="connexion">
            Connexion <span class="material-icons"> login </span>
        </a>
    </header>
    <main>
        <section>
            <h2 class="title">Suivez vos joueurs préférés</h2>
            <ul class="grid-picture-large">
                <li data-image="./assets/olympique/jenNezMarre.jpg" data-title="Neymar" data-description="Joueur Brézilien" data-dates="16/02/2022">
                    <figure><img src="./assets/olympique/jenNezMarre.jpg" alt="Neymar"></figure>
                </li>
                <li data-image="./assets/olympique/menon.jpg" data-title="Messi" data-description="Joueur Argentin" data-dates="16/02/2022">
                    <figure><img src="./assets/olympique/menon.jpg" alt="Messi"></figure>
                </li>
                <li data-image="./assets/olympique/ronalventre.jpg" data-title="ronaldo" data-description="Joueur Portugais" data-dates="16/02/2022">
                    <figure><img src="./assets/olympique/ronalventre.jpg" alt="ronaldo"></figure>
                </li>
                <li data-image="./assets/olympique/sun.jpg" data-title="sun" data-description="Joueur Coréen" data-dates="16/02/2022">
                    <figure><img src="./assets/olympique/sun.jpg" alt="sun"></figure>
                </li>
                <li data-image="./assets/olympique/mbappé.jpg" data-title="mbappé" data-description="Joueur Français" data-dates="16/02/2022">
                    <figure><img src="./assets/olympique/mbappé.jpg" alt="mbappé"></figure>
                </li>
            </ul>
        </section>
        <section>
            <ul class="grid-picture-large" aria-hidden="true">
                <?php include_once "./pages/connect_BDD.php" ?>
                <?php
                try {
                    // On récupère tout le contenu de la table recipes
                    $request = "SELECT * FROM `evenement` WHERE 5 >= `id_event`";
                    $sport = $_bdd->prepare($request);
                    $sport->execute();
                    $evenement = $sport->fetchAll();

                    // On affiche chaque recette une à une
                    foreach ($evenement as $event) {
                        echo
                        '<li' . ' data-image=' . $event['image'] . ' data-title="' . $event['nom'] . '" '
                            . 'data-description="' . $event['description']
                            . '"' . ' data-dates="' . $event['date_creation']
                            . '" >'
                            . '<figure>' . '<img src=' . $event['image'] . ' alt=' . $event['nom'] . " />"

                            . '<figcaption>' . '<h2>' . '<span class="material-icons" aria-hidden="true"> ' . 'add' . '</span> ' . "En savoir" . '</h2>' . '</figcaption>'


                            . '</figure>' .

                            '</li>';
                    }
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }

                ?>

            </ul>
        </section>
        <?php include_once("./pages/connect_BDD.php");
        include_once("./pages/main_form.inc.php");
        ?>
        <p id="warning"></p>
        <fieldset class="formulaire">
            <legend>Remplissez le formulaire</legend>
            <form method=" post">
                <label for="nom">nom</label>
                <input type="text" id="nom" name="nom" placeholder="nom" aria-required="true" autofocus required>
                <label for="prenom">prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="prénom" aria-required="true" required>
                <label for="age">age</label>
                <input type="number" id="age" name="age" placeholder="age" aria-required="true" required>
                <label for="ville">Ville</label>
                <select name="ville" id="ville" aria-required="true" required>
                    <option value="">- Choisissez la ville -</option>
                    <option value="paris">Paris</option>
                    <option value="lyon">Lyon</option>
                    <option value="marseille">Marseille</option>
                    <option value="toulouse">Toulouse</option>
                    <option value="nantes">Nantes</option>
                    <option value="strasbourg">Strasbourg</option>
                    <option value="bordeaux">Bordeaux</option>
                    <option value="lille">Lille</option>
                    <option value="rennes">Rennes</option>
                </select>
                <label for="email">email</label>
                <input type="email" id="email" name="email" placeholder="email" aria-required="true" required>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="password" aria-required="true" required>
                <input type="submit" value="Valider" class="btn">
            </form>
        </fieldset>
        <!-- modale -->
        <div class=" parent-modale" role="dialog" aria-label="true">
            <figure class="modale">
                <button aria-label="closed">
                    <span class="material-icons">clear</span>
                </button>
                <img src="https://via.placeholder.com/500" alt="picture" />
                <figcaption class="desc">
                    <h3>title</h3>
                    <p> </p>
                    <time datetime="2022-03-20">Years : </time>
                </figcaption>
            </figure>
        </div>

    </main>
    <?php
    include_once("./pages/footer_form.inc.php");
    ?>