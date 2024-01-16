<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 41");
$ps->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitLoco.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Locomotive a Vapeur Taille G</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./LocomotiveVapeur.php">Retour vers les Locomotives a Vapeurs</a>
        <h1>Locomotive a Vapeur Taille G</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <?php
            while ($et = $ps->fetch()) {
        ?>
             <img src="./Images/Loco/Vapeur/TailleG/<?php echo $et["Vue1"] ?>" alt="test vue1" id="LocoVapeurTailleGVue1">
    </div>
    <div class="carousel-item">
        <img src="./Images/Loco/Vapeur/TailleG/<?php echo $et["Vue2"] ?>" alt="test vue2" id="LocoVapeurTailleGVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/Vapeur/TailleG/<?php echo $et["Vue3"] ?>" alt="test vue2" id="LocoVapeurTailleGVue3">
    </div>
   </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionGVapeur">
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