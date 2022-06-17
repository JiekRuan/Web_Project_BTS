<?php
//sessions
session_start(); //démarrage de la session
session_destroy();
if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['email'])) {
   session_destroy();
}

?>

<?php
include_once("./pages/header.inc.php");
?>

<body>
   <header>
      <a href="/index.php"><img src="./assets/" alt="streaming" /></a>
      <h1>Maison des ligues - tous les sports</h1>
      <a href="./Connexion.php" class="connexion">
         Connexion <span class="material-icons"> login </span>
      </a>
   </header>
   <main>
      <section>
         <h2>Vous êtes adepte de sport en tout genre ? Remplissez le formulaire afin d'acceder au catalogue</h2>
         <p>Tous les mois profitez de toutes les nouveautés et opportunités
            que l'on vous propose sur
            vos séances de sport préférés</p>
         <ul class="grid-picture-large" aria-hidden="true">
            <?php include_once "./pages/connect_BDD.php" ?>
            <?php
            try {
               // On récupère tout le contenu de la table recipes
               $request = "SELECT * FROM `evenement` ";
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

                     . '<figcaption>' . '<h2>' . "En savoir" . '<span class="material-icons" aria-hidden="true"> ' . 'add' . '</span> ' . '</h2>' . '</figcaption>'


                     . '</figure>' .

                     '</li>';
               }
            } catch (Exception $e) {
               die('Erreur : ' . $e->getMessage());
            }

            ?>

         </ul>
         <a href="./formulaire.php">Cliquez ici pour commencer</a>
      </section>

      <!-- modale -->
      <div class="parent-modale" role="dialog" aria-label="true">
         <figure class="modale">
            <button aria-label="closed">
               <span class="material-icons">clear</span>
            </button>
            <img src="https://via.placeholder.com/500" alt="picture" />
            <figcaption class="desc">
               <h3>title</h3>
               <p></p>
               <time datetime="2022-03-20">Years :</time>
               <a href="./formulaire.php">S'inscrire à l'évenement</a>
            </figcaption>
         </figure>
      </div>
   </main>
   <?php
   include_once("./pages/footer.inc.php");
   ?>