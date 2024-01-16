<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagesprincipales Where id = 6");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Acceuil_non_connecter.css">
    <title>Page d'acceuil utilisateur connecter</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    require_once("./Header.php");
    ?>
    <!-- Body -->
    <?php
            while ($et = $ps->fetch()) {
        ?>
    <div class="images_accueil">
        <div id="contact">
            <a href="./Contact.php"><img src="./Images/Acceuil/<?php echo $et["Image1"] ?>" alt="contact" class="contact"></a>
            <p>Contactez-nous</p>
        </div>
        <div>
            <a href="./Les_Nouveautés.php"><img src="./Images/Acceuil/<?php echo $et["Image2"] ?>" alt="nouveaute" class="nouveaute"></a>
            <p>Les nouveautés</p>
        </div>
    </div>
    <?php
            }
        ?>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>




</body>

</html>




