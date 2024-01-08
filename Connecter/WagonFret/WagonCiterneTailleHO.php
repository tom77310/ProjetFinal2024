<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Citerne Taille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titreHOCiterne">
        <a href="./WagonCiterne.php">Retour vers les Wagons Citerne</a>
        <h1>Wagon Citerne Taille HO</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_citernes/Taille HO/wagon_citerne_tailleHO_vue1.png" alt="WagonCiterneTailleHOvue1" id="CiterneTailleHOVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_citernes/Taille HO/wagon_citerne_tailleHO_vue2.png" alt="WagonCiterneTailleHOvue2" id="CiterneTailleHOVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_citernes/Taille HO/wagon_citerne_tailleHO_vue3.png" alt="WagonCiterneTailleHOvue3" id="CiterneTailleHOVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_citernes/Taille HO/wagon_citerne_tailleHO_vue4.png" alt="WagonCiterneTailleHOvue4" id="CiterneTailleHOVue4">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_citernes/Taille HO/wagon_citerne_tailleHO_vue5.png" alt="WagonCiterneTailleHOvue5" id="CiterneTailleHOVue5">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 65€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionHOCiterne">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Wagon Citerne articulé de la compagnie suisse CFF, fabriquer par PIKO avec la réference 24604 en taille HO. 
    Il à été mis en service en 2005 et il est toujours en service aujourd'hui. <br>
    Sa longueur hors tampon est de 190mm (19cm).
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>