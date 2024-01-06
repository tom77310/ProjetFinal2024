<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitLoco.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Locomotive Diesel Taille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./LocoDiesel.php">Retour vers les Locomotives Diesel</a>
        <h1>Locomotive Diesel Taille HO</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Loco/loco_diesel/Taille HO/loco_diesel_tailleHO_vue1.png" alt="LocoDieselTailleHOvue1" id="LocoDieselTailleHOVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco_diesel/Taille HO/loco_diesel_tailleHO_vue2.png" alt="LocoDieselTailleHOvue2" id="LocoDieselTailleHOVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco_diesel/Taille HO/loco_diesel_tailleHO_vue3.png" alt="LocoDieselTailleHOvue3" id="LocoDieselTailleHOVue3">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 330€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionHODiesel">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Cette locomotive diesel à été utilisée  par la compagnie ferroviaire SNCF entre 1992 et 2004. <br>
    Ce modèle réduit a été fabriqué en plastique par R37 avec la réference HO41107DC. 
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>