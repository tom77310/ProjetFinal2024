<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitLoco.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Locomotive Electrique Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./LocoElec.php">Retour vers les Locomotives Electrique</a>
        <h1> Locomotive Electrique Taille Z</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Loco/loco elec/Taille Z/loco_elec-tailleZ_vue1.png" alt="LocoElecTailleZvue1" id="LocoElecTailleZVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Loco/loco elec/Taille Z/loco_elec-tailleZ_vue2.png" alt="LocoElecTailleZvue2" id="LocoElecTailleZVue2">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 200€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionZElec">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Cette locomotive éléctrique à été utilisée  par la compagnie ferroviaire suisse CFF en 2005 et elle est toujours utilisée actuellement.
    Ce modèle réduit a été fabriqué en plastique par Marklin avec la réference 88468. 
    Elle mesure 84mm (8.4cm) sans compter les tampons.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>