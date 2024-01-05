<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitAutomotrices.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Autorails Taille G</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./Autorails.php">Retour vers les Autorails</a>
        <h1>Autorail Taille G</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Automotrices/Autorails/Taille G/autorail_tailleG_vue1.png" alt="AutorailsTailleGvue1" id="AutorailsTailleGVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Automotrices/Autorails/Taille G/autorail_tailleG_vue2.png" alt="AutorailsTailleGvue2" id="AutorailsTailleGVue2">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 1000€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionGAutorails">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Cet autorail  a été mises en service  par la compagnie ferroviaire Allemande RHB en 2005 et il est toujours en service aujourd'hui.
    Ce modèle réduit a été fabriqué par LGB avec la réference 23100.  
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>