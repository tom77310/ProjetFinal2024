<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitLoco.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
   <title>Locomotive a Vapeur Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./LocomotiveVapeur.php">Retour vers les Locomotives a Vapeurs</a>
        <h1>Locomotive a Vapeur Taille N</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Loco/loco vapeur/Taille N/loco_vapeur_tailleN_vue1.png" alt="LocoVapeurTailleNvue1" id="LocoVapeurTailleNVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Loco/loco vapeur/Taille N/loco_vapeur_tailleN_vue2.png" alt="LocoVapeurTailleNvue2" id="LocoVapeurTailleNVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Loco/loco vapeur/Taille N/loco_vapeur_tailleN_vue3.png" alt="LocoVapeurTailleNvue3" id="LocoVapeurTailleNVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Loco/loco vapeur/Taille N/loco_vapeur_tailleN_vue4.png" alt="LocoVapeurTailleNvue4" id="LocoVapeurTailleNVue4">
    </div>

  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droiteNVapeur">
    <p>Prix unitaire : 330€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionNVapeur">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   Cette locomotive a vapeur à été utilisée  par la compagnie Internationnale des wagons lits entre 1832 et 1925. <br>
    Ce modèle réduit a été fabriqué en plastique et en métal par Hoby66 avec la réference H4036D.  <br>
    Elle fait 144mm(14.4cm)
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>