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
        <img src="./Images/Loco/loco vapeur/Taille HO/locomotive_vapeur_tailleHO_vue1.png" alt="LocoVapeurTailleHOvue1" id="LocoVapeurTailleHOVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco vapeur/Taille HO/locomotive_vapeur_tailleHO_vue2.png" alt="LocoVapeurTailleHOvue2" id="LocoVapeurTailleHOVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco vapeur/Taille HO/locomotive_vapeur_tailleHO_vue3.png" alt="LocoVapeurTailleHOvue3" id="LocoVapeurTailleHOVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco vapeur/Taille HO/locomotive_vapeur_tailleHO_vue4.png" alt="LocoVapeurTailleHOvue4" id="LocoVapeurTailleHOVue4">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco vapeur/Taille HO/locomotive_vapeur_tailleHO_vue5.png" alt="LocoVapeurTailleHOvue5" id="LocoVapeurTailleHOVue5">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droiteHOVapeur">
    <p>Prix unitaire : 650€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionHOVapeur">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Cette locomotive a vapeur à été utilisée  par la compagnie ferroviaire SNCF entre 1946 et 1970. <br>
    Ce modèle réduit a été fabriqué en plastique par REE avec la réference MB239SAC. 
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>