<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 42");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitLoco.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
   <title>Locomotive a Vapeur Taille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./LocomotiveVapeur.php">Retour vers les Locomotives a Vapeurs</a>
        <h1>Locomotive a Vapeur Taille HO</h1>
    </div>
    <!-- Carrousel -->
    <div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <?php
            while ($et = $ps->fetch()) {
        ?>
             <img src="./Images/Loco/Vapeur/TailleHO/<?php echo $et["Vue1"] ?>" alt="LocoVapeurTailleHOvue1" id="LocoVapeurTailleHOVue1">
    </div>
    <div class="carousel-item">
        <img src="./Images/Loco/Vapeur/TailleHO/<?php echo $et["Vue2"] ?>" alt="LocoVapeurTailleHOvue2" id="LocoVapeurTailleHOVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/Vapeur/TailleHO/<?php echo $et["Vue3"] ?>" alt="LocoVapeurTailleHOvue3" id="LocoVapeurTailleHOVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/Vapeur/TailleHO/<?php echo $et["Vue4"] ?>" alt="LocoVapeurTailleHOvue4" id="LocoVapeurTailleHOVue4">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/Vapeur/TailleHO/<?php echo $et["Vue5"] ?>" alt="LocoVapeurTailleHOvue5" id="LocoVapeurTailleHOVue5">
    </div>
   </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droiteHOVapeur">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="../PagesPrincipales/Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionHOVapeur">
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