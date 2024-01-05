<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Citerne Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titreZCiterne">
        <a href="./WagonCiterne.php">Retour vers les wagons Citerne</a>
        <h1>Lot de 3 Wagons Citerne Taille Z</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_citernes/Taille Z/wagon_citerne_tailleZ_vue1.png" alt="WagonCiterneTailleZvue1" id="CiterneTailleZVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_citernes/Taille Z/wagon_citerne_tailleZ_vue2.png" alt="WagonCiterneTailleZvue2" id="CiterneTailleZVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_citernes/Taille Z/wagon_citerne_tailleZ_vue3.png" alt="WagonCiterneTailleZvue3" id="CiterneTailleZVue3">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 95€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionZCiterne">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Lot de 3 Wagon citerne exploité par la compagnie ferroviaire autrichienne OBB entre 1945 et 1970. <br>
    Ces modèles réduits ont été fabriqués par Marklin avec la réference 82320 en taille Z.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>