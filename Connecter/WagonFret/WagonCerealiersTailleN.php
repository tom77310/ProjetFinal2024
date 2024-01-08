<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Cerealier Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titreNCerealier">
        <a href="./WagonCerealiers.php">Retour vers les Wagons Cerealiers</a>
        <h1> Wagon Cerealier Taille N</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_cerealers/Taille N/wagon_cerealier_tailleN_vue1.png" alt="WagonCerealierTailleNvue1" id="CerealierTailleNVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_cerealers/Taille N/wagon_cerealier_tailleN_vue2.png" alt="WagonCerealierTailleNvue2" id="CerealierTailleNVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_cerealers/Taille N/wagon_cerealier_tailleN_vue3.png" alt="WagonCerealierTailleNvue3" id="CerealierTailleNVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_cerealers/Taille N/wagon_cerealier_tailleN_vue4.png" alt="WagonCerealierTailleNvue4" id="CerealierTailleNVue4">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 40€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionNCerealier">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Wagon cerealier, exploité par la compagnie ferroviaire SNCF entre 1971 et 1991. <br>
    Ces wagons ont été fabriqués par REE avec la réference NW312 en taille N. 
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>