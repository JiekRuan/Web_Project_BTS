<?php
include_once("./pages/header.inc.php");
?>

<body>
    <header>
        <a href="./index.php"><img src="./assets/ligue64.png" alt="ligue" /></a>
        <h1>Maison des ligues - tous les sports</h1>
        <ul>

        </ul>
    </header>
    <main>
        <fieldset>
            <legend>Changement de mot de passe</legend>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="pseudo">Votre mail</label>
                <input type="text" name="pseudo" id="pseudo" required />
                <?php
                /*
                    ini_set("SMTP","localhost");
                    ini_set("smtp_port","25");
                    $dest="philippe.delente@gmail.com";
                    $objet="Changement de mot de passe";
                    $message="
                        <font face='arial'>
                        Bonjour,
                        ouais
                        </font>
                    ";
                    $entetes="From: philippe.delente@gmail.com";
                    $entetes.="Cc: philippe.delente@gmail.com";
                    $entetes.="Content-Type: text/html; charset=iso-8859-1";
                    
                        mail($dest,$objet,$message,$entetes)
                        
                    */
                ?>

                <input type="submit" value="S'inscrire" />
            </form>
        </fieldset>
    </main>
    <?php
    include_once("./pages/footer.inc.php");
    ?>