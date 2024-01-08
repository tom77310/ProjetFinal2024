<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Conteneur Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonConteneur.php">Retour vers les wagons de Fret Plat Porte Conteneur</a>
        <h1>Lot de 3 Wagons de Fret Plat Porte Conteneur Taille N</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_n/wagon_porte_containeur_taille_N_vue1.png" alt="WagonConteneurTailleNvue1" id="ConteneurTailleNVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_n/wagon_porte_containeur_taille_N_vue2.png" alt="WagonConteneurTailleNvue2" id="ConteneurTailleNVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_n/wagon_porte_containeur_taille_N_vue3.png" alt="WagonConteneurTailleNvue3" id="ConteneurTailleNVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_n/wagon_porte_containeur_taille_N_vue4.png" alt="WagonConteneurTailleNvue4" id="ConteneurTailleNVue4">
    </div>
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_n/wagon_porte_containeur_taille_N_vue5.png" alt="WagonConteneurTailleNvue5" id="ConteneurTailleNVue5">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_n/wagon_porte_containeur_taille_N_vue6.png" alt="WagonConteneurTailleNvue6" id="ConteneurTailleNVue6">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_n/wagon_porte_containeur_taille_N_vue7.png" alt="WagonConteneurTailleNvue7" id="ConteneurTailleNVue7">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_plat_porte_conteur/page_produit_n/wagon_porte_containeur_taille_N_vue8.png" alt="WagonConteneurTailleNvue8" id="ConteneurTailleNVue8">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 130€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionNConteneur">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   Lot de 3 Wagons plat porte conteneur, exploités par la compagnie ferroviaire SNCF entre 1991 et 2004.
Ces wgons ont éte fabriquer par Minitrix avec la réference 15072 en taille N. 
Ils ont une longueur totale chacun sans les tampons de 372mm (37.2cm).
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>