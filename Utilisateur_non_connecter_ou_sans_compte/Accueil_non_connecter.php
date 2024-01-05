<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Acceuil_non_connecter.css">
    <title>Page d'acceuil utilisateur non connecter</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    require_once("./Header.php");
    ?>
    <!-- Body -->

    <div class="images_accueil">
        <div id="contact">
            <a href="./Contact.php"><img src="./Images/Acceuil/logo_contact.png" alt="contact" class="contact"> </a><br>
            <p>Contactez-nous</p>
        </div>
        <div>
            <a href="./Les_Nouveautés.php"><img src="./Images/Acceuil/tgv_nouveauté.png" alt="nouveauté" class="nouveaute"></a>
            <p>Les nouveautés</p>
        </div>
    </div>



    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>




</body>

</html>