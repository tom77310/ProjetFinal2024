<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Conteneur Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonConteneur.php">Retour vers les wagons de Fret Plat Porte Conteneur</a>
        <h1>Lot de 2 Wagons de Fret Plat Porte Conteneur Taille Z</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_plat_porte_conteur/page_produit_z/wagon_porte_containeur_taille_Z_vue1.png" alt="WagonConteneurTailleZvue1" id="ConteneurTailleZVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_plat_porte_conteur/page_produit_z/wagon_porte_containeur_taille_Z_vue2.png" alt="WagonConteneurTailleZvue2" id="ConteneurTailleZVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_plat_porte_conteur/page_produit_z/wagon_porte_containeur_taille_Z_vue3.png" alt="WagonConteneurTailleZvue3" id="ConteneurTailleZVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_plat_porte_conteur/page_produit_z/wagon_porte_containeur_taille_Z_vue4.png" alt="WagonConteneurTailleZvue4" id="ConteneurTailleZVue4">
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
<div class="descriptionZConteneur">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   Lot de 2 Wagon plat porte-conteneur de la compagnie ferroviaire allemande DB, fabriquer par Marklin avec la réference 82273 en taille Z . Ils font 156 mm chacun sans comptés les tampons.
Ils sont utilisés dans le système de transport combiné, où les conteneurs sont transportés à la fois par train et par camion.
Ces wagon porte-conteneur a été mise en service par la DB en 2005 et ils sont toujours en services aujourd’hui.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>