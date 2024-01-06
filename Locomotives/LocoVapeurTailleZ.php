<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitLoco.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
   <title>Locomotive a Vapeur Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./LocomotiveVapeur.php">Retour vers les Locomotives a Vapeurs</a>
        <h1>Locomotive a Vapeur Taille Z</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Loco/loco vapeur/Taille Z/loco_vapeur_tailleZ_vue1.png" alt="LocoVapeurTailleZvue1" id="LocoVapeurTailleZVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco vapeur/Taille Z/loco_vapeur_tailleZ_vue2.png" alt="LocoVapeurTailleZvue2" id="LocoVapeurTailleZVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco vapeur/Taille Z/loco_vapeur_tailleZ_vue3.png" alt="LocoVapeurTailleZvue3" id="LocoVapeurTailleZVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Loco/loco vapeur/Taille Z/loco_vapeur_tailleZ_vue4.png" alt="LocoVapeurTailleZvue4" id="LocoVapeurTailleZVue4">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droiteZVapeur">
    <p>Prix unitaire : 240€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionZVapeur">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Cette locomotive a vapeur à été utilisée  par la compagnie ferroviaire allemande DR entre 1946 et 1970. <br>
    Ce modèle réduit a été fabriqué en plastique par Marklin avec la réference 88997.  <br>
    Elle mesure 89mm (8.9cm) sans compter les tampons.
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>