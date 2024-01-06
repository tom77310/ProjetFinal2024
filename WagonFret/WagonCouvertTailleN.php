<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Couvert Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonCouvert.php">Retour vers les wagons de Fret Couvert</a>
        <h1>Wagon de Fret Couvert Taille N</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_couvert/page_produit_n/image_wagon_de_fret_couvert_taille_n._vue1_N.png" alt="WagonCouvertTailleNvue1" id="CouvertTailleNVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_couvert/page_produit_n/image_wagon_de_fret_couvert_taille_n._vue2_N.png" alt="WagonCouvertTailleNvue2" id="CouvertTailleNVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_couvert/page_produit_n/image_wagon_de_fret_couvert_taille_n_vue3.png" alt="WagonCouvertTailleNvue3" id="CouvertTailleNVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_couvert/page_produit_n/image_wagon_de_fret_couvert_taille_n_vue4.png" alt="WagonCouvertTailleNvue4" id="CouvertTailleNVue4">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 50€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionNCouvert">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Wagon couvert de la compagnie ferroviaire SNCF, fabriquer par Trains160 avec la réference 16023 en taille N. 
    Il est vétu d’une livrée 2 tons (brun/rouge) avec le sigle FRET SNCF en blanc sur les deux cotés du wagon. 
    Ce wagon couvert a été mise en service par la SNCF entre 1970 jusqu’en 2004.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>