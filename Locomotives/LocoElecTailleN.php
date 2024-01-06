<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitLoco.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Locomotive Electrique Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./LocoElec.php">Retour vers les Locomotives Electrique</a>
        <h1> Locomotive Electrique Taille N</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Loco/loco elec/Taille N/loco_elec_tailleN_vue1.png" alt="LocoElecTailleNvue1" id="LocoElecTailleNVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco elec/Taille N/loco_elec_tailleN_vue2.png" alt="LocoElecTailleNvue2" id="LocoElecTailleNVue2">
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
<div class="descriptionNElec">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Cette locomotive éléctrique à été mise en service par la compagnie ferroiaire suisse en 2005 et elle est toujours en service actuellement.
    Ce modèle réduit a été fabriqué en plastique et en métal par Piko avec la réference 40583. 
    Elle fait 118mm(11.8cm)
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>