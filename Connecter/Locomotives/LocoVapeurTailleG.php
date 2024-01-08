<?php
require_once("../ConnexionBDD.php");
// session_start();
// $ps = $BDD->prepare("SELECT images FROM produit Where id_produit = 41 LIMIT 1");
// $ps = $BDD->prepare("SELECT detail_produit FROM produit Where id_produit = 41");
// $ps = $BDD->prepare("SELECT * FROM produit WHERE id_produit =41 LIMIT 1");
// $ps->execute();
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
        
        <!-- ?php -->
            <!-- while ($et = $ps->fetch()) { -->
        <!-- ?> -->
                <!-- <img src="./Images/Loco/loco vapeur/Taille G/ ?php echo $et["images"] ?>" alt="test vue1" > -->
        <!-- ?php -->
            <!-- } -->
        <!-- ?> -->
        
        
        
        
        
        <img src="./Images/Loco/loco vapeur/Taille G/loco_vapeur_tailleG_vue1.png" alt="LocoVapeurTailleGvue1" id="LocoVapeurTailleGVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco vapeur/Taille G/loco_vapeur_tailleG_vue2.png" alt="LocoVapeurTailleGvue2" id="LocoVapeurTailleGVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco vapeur/Taille G/loco_vapeur_tailleG_vue3.png" alt="LocoVapeurTailleGvue3" id="LocoVapeurTailleGVue3">
    </div>
   </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 750€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionGVapeur">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    <!-- ?php -->
    <!-- while ($et = $ps->fetch()) { -->
        <!-- ?> -->
<!-- ?php  -->
   <!-- echo $et ["detail_produit"] -->
   <!-- ?> -->


        <!-- ?php -->
    <!-- // } -->
    
    <!-- // ?> -->
    
    Cette locomotive a vapeur à été utilisée  par la compagnie ferroviaire autrichienne entre 1970 et 1990. <br>
    Ce modèle réduit a été fabriqué en plastique par LGB avec la réference 27254. 
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>