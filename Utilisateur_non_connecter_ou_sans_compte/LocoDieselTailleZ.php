<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitLoco.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Locomotive Diesel Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./LocoDiesel.php">Retour vers les Locomotives Diesel</a>
        <h1>Locomotive Diesel Taille Z</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Loco/loco_diesel/Taille Z/loco_diesel_tailleZ_vue1.png" alt="LocoDieselTailleZvue1" id="LocoDieselTailleZVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Loco/loco_diesel/Taille Z/loco_diesel_tailleZ_vue2.png" alt="LocoDieselTailleZvue2" id="LocoDieselTailleZVue2">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 214€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionZDiesel">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Cette locomotive diesel à été utilisée  par la compagnie ferroviaire SNCF entre 1970 et 1990. <br>
    Ce modèle réduit a été fabriqué en plastique par AZAR MODELS avec la réference L01-BL2A.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>