<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 15");
$ps->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Rebord Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonRebord.php">Retour vers les wagons de Fret Plat a Rebord</a>
        <h1>Wagon de Fret Plat a Rebord Taille Z</h1>
    </div>
    <!-- Carrousel -->
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
<img src="./Images/Rebord/TailleZ/<?php echo $et["Vue1"] ?>" alt="RebordTailleZVue1" id="RebordTailleZVue1">
    </div>
    <div class="carousel-item">
<img src="./Images/Rebord/TailleZ/<?php echo $et["Vue2"] ?>" alt="RebordTailleZVue2" id="RebordTailleZVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Rebord/TailleZ/<?php echo $et["Vue3"] ?>" alt="RebordTailleZVue3" id="RebordTailleZVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Rebord/TailleZ/<?php echo $et["Vue4"] ?>" alt="RebordTailleZVue4" id="RebordTailleZVue4">
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
<div class="descriptionZRebord">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
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