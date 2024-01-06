<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitAutomotrices.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Autorails Taille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./Autorails.php">Retour vers les Automotrices</a>
        <h1>Autorail Taille HO</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Automotrices/Autorails/Taille HO/autorail_tailleHO_vue1.png" alt="AutorailsTailleHOvue1" id="AutorailsTailleHOVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Automotrices/Autorails/Taille HO/autorail_tailleHO_vue2.png" alt="AutorailsTailleHOvue2" id="AutorailsTailleHOVue2">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 330€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionHOAutorails">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Cet autorail a été mise en service  par la compagnie ferroviaire SNCF en 2005 et il est toujours en service aujourd’hui.
    Ce modèle réduit a été fabriqué en plastique Piko avec la réference 96531. 
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>