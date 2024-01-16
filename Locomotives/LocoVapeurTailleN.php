<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 43");
$ps->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitLoco.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
   <title>Locomotive a Vapeur Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./LocomotiveVapeur.php">Retour vers les Locomotives a Vapeurs</a>
        <h1>Locomotive a Vapeur Taille N</h1>
    </div>
    <!-- Carroussel -->
    <div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <?php
            while ($et = $ps->fetch()) {
        ?>
             <img src="./Images/Loco/Vapeur/TailleN/<?php echo $et["Vue1"] ?>" alt="LocoVapeurTailleNvue1" id="LocoVapeurTailleNVue1">
    </div>
    <div class="carousel-item">
        <img src="./Images/Loco/Vapeur/TailleN/<?php echo $et["Vue2"] ?>" alt="LocoVapeurTailleNvue2" id="LocoVapeurTailleNVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/Vapeur/TailleN/<?php echo $et["Vue3"] ?>" alt="LocoVapeurTailleNvue3" id="LocoVapeurTailleNVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/Vapeur/TailleN/<?php echo $et["Vue4"] ?>" alt="LocoVapeurTailleNvue4" id="LocoVapeurTailleNVue4">
    </div>
   </div>

<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droiteNVapeur">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="../PagesPrincipales/Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionNVapeur">
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