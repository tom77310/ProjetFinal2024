<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Bachés Taille G</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonBache.php">Retour vers les wagons Bachés</a>
        <h1>Wagon de Fret Couvert Taille G</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_bachés/Taille G/wagon_baché_tailleG_vue1.png" alt="WagonBacheTailleGvue1" id="BacheTailleGVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_bachés/Taille G/wagon_baché_tailleG_vue2.png" alt="WagonBacheTailleGvue2" id="BacheTailleGVue2">
    </div>
   </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 170€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionGCouvert">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Wagon baché fabriqué en plastique. <br>
    Il mesure 486 mm (48.6cm). Il a été mis en service en 2005 et est toujours en service aujourd’hui.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>