<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Citerne Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titreNCiterne">
        <a href="./WagonCiterne.php">Retour vers les Wagons Citerne</a>
        <h1> Wagon Citerne Taille N</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_citernes/Taille N/Wagon_citerne_tailleN_vue1.png" alt="WagonCiterneTailleNvue1" id="CiterneTailleNVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_citernes/Taille N/Wagon_citerne_tailleN_vue2.png" alt="WagonCiterneTailleNvue2" id="CiterneTailleNVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_citernes/Taille N/Wagon_citerne_tailleN_vue3.png" alt="WagonCiterneTailleNvue3" id="CiterneTailleNVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_citernes/Taille N/Wagon_citerne_tailleN_vue4.png" alt="WagonCiterneTailleNvue4" id="CiterneTailleNVue4">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 50€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionNCiterne">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Wagon citerne, exploités par la compagnie ferroviaire autrichienne OBB entre 1971 et 1991. <br>
    Ce wagon à été fabriqué par Liliput avec la réference 265995 en taille N. 
    Il a été fabriqué en plastique.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>