<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitAutomotrices.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>TGV Taille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titreHOTGV">
        <a href="./TGV.php">Retour vers les TGV</a>
        <h1>TGV Ouigo Taille HO</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/TGV/Taille HO/TGV_tailleHO_vue1.png" alt="TGVTailleHOvue1" id="TGVTailleHOVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/TGV/Taille HO/TGV_tailleHO_vue2.png" alt="TGVTailleHOvue2" id="TGVTailleHOVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/TGV/Taille HO/TGV_tailleHO_vue3.png" alt="TGVTailleHOvue3" id="TGVTailleHOVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/TGV/Taille HO/TGV_tailleHO_vue4.png" alt="TGVTailleHOvue4" id="TGVTailleHOVue4">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 350€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionHOTGV">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Cette automotrice Ouigo a été mise en service  par la compagnie ferroviaire SNCF en 2005 et elle est toujours en service aujourd’hui. <br>
    Ce modèle réduit a été fabriqué en plastique par le fabriquant JOUEF avec la réference 2413. 
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>