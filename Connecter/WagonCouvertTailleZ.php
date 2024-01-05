<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret CouvertTaille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonCouvert.php">Retour vers les wagons de Fret Couvert</a>
        <h1>Wagon de Fret Couvert Taille Z</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_z/image_wagon_de_fret_couvert_taille_z.png" alt="WagonCouvertTailleZvue1" id="CouvertTailleZVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_z/Image_page_produit_vue_2_wagon_fret_couvert_taille_z.png" alt="WagonCouvertTailleZvue2" id="CouvertTailleZVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_z/Image_page_produit_vue_3_wagon_fret_couvert_taille_z.png" alt="WagonCouvertTailleZvue3" id="CouvertTailleZVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_z/Image_page_produit_vue_4_wagon_fret_couvert_taille_z.png" alt="WagonCouvertTailleZvue4" id="CouvertTailleZVue4">
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
<div class="description">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
Wagon couvert de la compagnie ferroviaire SNCF, fabriquer par AZAR MODELS avec la réference AZW02-STAX en taille Z. 
C’est un wagon couvert avec feux de fin de convoie, la caisse du wagon est réalisée en 3D haute définition, la peinture et l’inscription sont sérigraphié pour avoir une haute résolution. 
Il a une grande résistance, il est équiper d’essieux en métal avec finition nickel brun, son attelage du fabriquant Marklin est compatible avec l’ensemble des modèles des constructeurs europpéens. La caisse et le chassis sont en injection plastique.
Ce wagon couvert a été mise en service par la SNCF en 1945 jusqu’en 1991.
Ce wagon fait partis de la dernière série de wagon couvert a 2 essieux, produit en grande serie.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>