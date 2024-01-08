<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitVoituresVoy.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
   <title>Voiture de Voyageurs Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="../PagesPrincipales/Voitures_Voyageurs.php">Retour vers les Voitures de Voyageurs</a>
        <h1>Voiture de Voyageurs Taille N</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Voiture_voyageurs/Taille N/voiture_voyageurs_tailleN_vue1.png" alt="VoituresVoyageursTailleNvue1" id="VoituresVoyageursTailleNVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Voiture_voyageurs/Taille N/voiture_voyageurs_tailleN_vue2.png" alt="VoituresVoyageursTailleNvue2" id="VoituresVoyageursTailleNVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Voiture_voyageurs/Taille N/voiture_voyageurs_tailleN_vue3.png" alt="VoituresVoyageursTailleNvue3" id="VoituresVoyageursTailleNVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Voiture_voyageurs/Taille N/voiture_voyageurs_tailleN_vue4.png" alt="VoituresVoyageursTailleNvue4" id="VoituresVoyageursTailleNVue4">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 70€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionNVoy">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Voiture de voyageurs a étage mise en service par la compagnie ferroviaire allemande DB en 2005 et elle est encore utilisée aujourd’hui. <br>
    Ce modèle réduit à été fabriqué par Fleishmann avec la réference FL862812 en taille N. <br>
    La longueur totale de la voiture est de 167mm (16.7cm).
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>