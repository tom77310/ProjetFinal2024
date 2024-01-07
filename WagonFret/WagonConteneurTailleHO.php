<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret CouvertTaille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonConteneur.php">Retour vers les wagons de Fret Plat Porte Conteneur</a>
        <h1>Wagon de Fret Plat Porte Conteneur Taille HO</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_HO/wagon_porte_containeur_taille_HO_vue1.png" alt="WagonConteneurTailleHOvue1" id="ConteneurTailleHOVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_HO/wagon_porte_containeur_taille_HO_vue2.png" alt="WagonConteneurTailleHOvue2" id="ConteneurTailleHOVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_HO/wagon_porte_containeur_taille_HO_vue3.png" alt="WagonConteneurTailleHOvue3" id="ConteneurTailleHOVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_HO/wagon_porte_containeur_taille_HO_vue4.png" alt="WagonConteneurTailleHOvue4" id="ConteneurTailleHOVue4">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_HO/wagon_porte_containeur_taille_HO_vue5.png" alt="WagonConteneurTailleHOvue5" id="ConteneurTailleHOVue5">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 45€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionHOConteneur">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   Wagon plat porte-conteneurs de la compagnie suisse CFF, fabriquer par Piko avec la référence 58132 en taille HO. 
   Il a une livrée Cargo Domino et à été mise en service par la compagnie ferroviaire Suisse CFF entre 1990 et 2004. 
   Sa longueur hors tampon est de 157mm (15.7cm).
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>