<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Conteneur Taille G</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonConteneur.php">Retour vers les wagons de Fret Plat Porte Conteneur</a>
        <h1>Wagon de Fret Conteneur Taille G</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_plat_porte_conteur/page_produit_g/wagon_porte_containeur_taille_G_vue1.png" alt="WagonContneurTailleGvue1" id="ConteneurTailleGVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_plat_porte_conteur/page_produit_g/wagon_porte_containeur_taille_G_vue2.png" alt="WagonContneurTailleGvue2" id="ConteneurTailleGVue2">
    </div>
   </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 240€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionGConteneur">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   Wagon plat porte-conteneur de la compagnie ferroviaire suisse RHB, fabriquer par LGB avec la réference 45925 en taille G. 
Le wagon transporte un conteneur “La Poste”, il est équipé d’une manivelle de frein à main et les roues sont en métal.
Il mesure 710 mm (71cm) sans compter les tampons du wagon.
Ce wagon plat porte conteneur a été mise en service par la compagnie ferrovire Suisse RHB en 2005 et il est toujours utilisé aujourd’hui.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>