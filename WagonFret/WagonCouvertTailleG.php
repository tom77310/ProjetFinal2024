<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret CouvertTaille G</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonCouvert.php">Retour vers les wagons de Fret Couvert</a>
        <h1>Wagon de Fret Couvert Taille G</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_couvert/page_produit_g/image_wagon_de_fret_couvert_taille_g_vue1.png" alt="WagonCouvertTailleGvue1" id="CouvertTailleGVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_couvert/page_produit_g/image_wagon_de_fret_couvert_taille_g_vue2.png" alt="WagonCouvertTailleGvue2" id="CouvertTailleGVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_couvert/page_produit_g/image_wagon_de_fret_couvert_taille_g.png" alt="WagonCouvertTailleGvue3" id="CouvertTailleGVue3">
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
<div class="descriptionGCouvert">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   Wagon couvert de la compagnie ferroviaire allemande DR, fabriquer par LGB avec la réference 43602 en taille G. 
C’est un wagon couvert fabriqué en plastique, sa longueur est de 480 mm (48 cm), il est vendu neuf. 
Ce wagon couvert a été mise en service par la compagnie ferrovire allemende DR entre 1945 jusqu’en 1970.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>