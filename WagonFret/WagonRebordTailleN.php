<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 16");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
    <title>Wagon de Fret Rebord Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonRebord.php">Retour vers les wagons de Fret Plat a Rebord </a>
        <h1>Lot de 2 Wagons de Fret Plat a Rebord Taille N</h1>
    </div>
    <!-- Carrousel -->
    <?php
            while ($et = $ps->fetch()) {
        ?>
    <div id="carousel-container">
        <div id="carousel">
            <div class="carousel-item">
<img src="./Images/Rebord/TailleN/<?php echo $et["Vue1"] ?>" alt="RebordTailleNVue1" id="RebordTailleNVue1">
            </div>
            <div class="carousel-item">
<img src="./Images/Rebord/TailleN/<?php echo $et["Vue2"] ?>" alt="RebordTailleNVue2" id="RebordTailleNVue2">
            </div>
            <div class="carousel-item">
    <img src="./Images/Rebord/TailleN/<?php echo $et["Vue3"] ?>" alt="RebordTailleNVue3" id="RebordTailleNVue3">
            </div>
        </div>
    </div>
    <div class="bouton">
        <button id="prev-btn" onclick="prevSlide()">Précédent</button>
        <button id="next-btn" onclick="nextSlide()">Suivant</button>
    </div>
    <div class="droite">
    <p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="../PagesPrincipales/Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
    </div>
    <div class="descriptionNRebord">
        <p>
            <span class="titre_description">Description du Produit :</span> <br>
            <?php 
    echo $et ["detail_produit"] 
    ?>
        <?php
            }
        ?>
        </p>
    </div>

    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>

</html>