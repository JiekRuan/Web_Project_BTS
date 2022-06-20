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
      <a href="/index.php"><img src="./assets/ligue64.png" alt="ligue" /></a>
      <h1>Maison des ligues - tous les sports</h1>
      <a href="./Connexion.php" class="connexion">
         Connexion <span class="material-icons"> login </span>
      </a>
   </header>
   <main>
      <section>
         <h2 class="title">Prêt à la compétition ? Remplissez le formulaire proposé dans cette page</h2>
         <p class="text">Tous les mois profitez de toutes les nouveautés et opportunités. A partir du mois
            prochain on vous propose toutes les séance de sport sur vos support préférés</p>
         <div class=" new_movie">
            <h2 class="title">Les sports proposés</h2>
            <ul class=" grid-picture-large">
               <li data-image="./assets/olympique/athlétisme.jpg" data-title="athlétisme" data-description="le ballon rond" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/athlétisme.jpg" alt="athlétisme">
                     <figcaption>athlétisme</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/natation.jpg" data-title="natation" data-description="nager c'est bien pour la santé" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/natation.jpg" alt="natation">
                     <figcaption>natation</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/golf.jpg" data-title="golf" data-description="le golf c'est bien" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/golf.jpg" alt="golf">
                     <figcaption>golf</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/escrime.jpg" data-title="escrime" data-description="L'escrime technique" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/escrime.jpg" alt="escrime">
                     <figcaption>escrime</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/baseball.jpg" data-title="baseball" data-description="Home run !" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/baseball.jpg" alt="baseball">
                     <figcaption>baseball</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/basketball.jpg" data-title="basketball" data-description="3 points ! de MJ ? <br> je ne parle pas de Jackson" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/basketball.jpg" alt="basketball">
                     <figcaption>basketball</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/cyclisme.jpg" data-title="Cyclisme" data-description="Le tour de France est à votre porté" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/cyclisme.jpg" alt="Cyclisme">
                     <figcaption>cyclisme</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/equitation.jpg" data-title="equitation" data-description="Le cheval c'est génial" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/equitation.jpg" alt="equitation">
                     <figcaption>equitation</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/tennis.jpg" data-title="tennis" data-description="Le Rolland garros est votre objectif ?" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/tennis.jpg" alt="tennis">
                     <figcaption>tennis</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/boxe.jpg" data-title="boxe" data-description="Attention au cocard" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/boxe.jpg" alt="boxe">
                     <figcaption>boxe</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/haltérophilie.jpg" data-title="haltérophilie" data-description="Attention aux mouvements" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/haltérophilie.jpg" alt="haltérophilie">
                     <figcaption>haltérophilie</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/hockey.jpg" data-title="hockey" data-description="Coup droit ! faites gaffe aux dents" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/hockey.jpg" alt="hockey">
                     <figcaption>hockey</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/judo.jpg" data-title="judo" data-description="Ippon" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/judo.jpg" alt="judo">
                     <figcaption>judo</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/football.jpg" data-title="football" data-description="Ce n'est pas que pour les vieux" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/football.jpg" alt="football">
                     <figcaption>football</figcaption>
                  </figure>
               </li>
               <li data-image="./assets/olympique/badminton.jpg" data-title="badminton" data-description="Attention aux volants" data-dates="21/06/2022">
                  <figure>
                     <img src="./assets/olympique/badminton.jpg" alt="badminton">
                     <figcaption>badminton</figcaption>
                  </figure>
               </li>
            </ul>
            <a href="./formulaire.php" class="btn-start"><span>Cliquer ici pour commencer</span></a>
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