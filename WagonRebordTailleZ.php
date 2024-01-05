<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Rebord Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonRebord.php">Retour vers les wagons de Fret Plat a Rebord</a>
        <h1>Wagon de Fret Plat a Rebord Taille Z</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Wagon_fret/wagon_plat_rebords/page_produit_z/image_wagon_plat_rebord_tailleZ_vue1.png" alt="WagonRebordTailleZvue1" id="RebordTailleZVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/wagon_plat_rebords/page_produit_z/image_wagon_plat_rebord_tailleZ_vue2.png" alt="WagonRebordTailleZvue2" id="RebordTailleZVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/wagon_plat_rebords/page_produit_z/image_wagon_plat_rebord_tailleZ_vue3.png" alt="WagonRebordTailleZvue3" id="RebordTailleZVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/wagon_plat_rebords/page_produit_z/image_wagon_plat_rebord_tailleZ_vue4.png" alt="WagonRebordTailleZvue4" id="RebordTailleZVue4">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 30€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionZRebord">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   Ce Wagon plat à rebords exploité par la compagnie ferroviaire allemande DB entre 1946 et 1970.
Ce modèle réduit à été fabriquer par Marklin avec la réference 82133 en taille Z . Il fait 65 mm (6.5cm).
Il est fait en plastique.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>