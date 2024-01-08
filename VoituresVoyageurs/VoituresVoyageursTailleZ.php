<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitVoituresVoy.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
   <title>Voitures de Voyageurs Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="../PagesPrincipales/Voitures_Voyageurs.php">Retour vers les Voitures de Voyageurs</a>
        <h1>Lot de 3 Voitures de Voyageurs Taille Z</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Voiture_voyageurs/Taille Z/voiture_voyageur_tailleZ_vue1.png" alt="VoitureVoyageursTailleZvue1" id="VoituresVoyageursTailleZVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Voiture_voyageurs/Taille Z/voiture_voyageur_tailleZ_vue2.png" alt="VoitureVoyageursTailleZvue2" id="VoituresVoyageursTailleZVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Voiture_voyageurs/Taille Z/voiture_voyageur_tailleZ_vue3.png" alt="VoitureVoyageursTailleZvue3" id="VoituresVoyageursTailleZVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Voiture_voyageurs/Taille Z/voiture_voyageur_tailleZ_vue4.png" alt="VoitureVoyageursTailleZvue4" id="VoituresVoyageursTailleZVue4">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droiteZVoy">
    <p>Prix unitaire : 130€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionZVoy">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Set de 3 voiture de voyageurs de seconde classe mises en service par la compagnie ferroviaire allemande DB entre 1971 et 1991. <br>
    Ce modèle réduit à été fabriqué par LS MODELS avec la réference 87402 en taille Z. <br>
    Une fois les 3 voitures attachées elles font une longueurs totale de 365mm (36.5cm) environ.
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>