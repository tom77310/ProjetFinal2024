<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitAutomotrices.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>TGV Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titreNTGV">
        <a href="./TGV.php">Retour vers les TGV</a>
        <h1>TGV Lyria Taille N</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Automotrices/TGV/Taille N/TGV_tailleN_vue1.png" alt="TGVTailleNvue1" id="TGVTailleNVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Automotrices/TGV/Taille N/TGV_tailleN_vue2.png" alt="TGVTailleNvue2" id="TGVTailleNVue2">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 300€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionNTGV">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Ce TGV duplex Lyria a été mises en service  par la compagnie ferroviaire SNCF et la compagnie ferroviaire suisse CFF en 2005 et elle est toujours utilisée aujourd’hui. <br>
    Ce modèle réduit a été fabriqué par KATO avec la réference 101762. 
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>