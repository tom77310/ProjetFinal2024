<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>     -->
<title>Wagon de Fret Bachés Taille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonBache.php">Retour vers les wagons Bachés</a>
        <h1>Wagon Baché Taille HO</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_bachés/Taille HO/wagon_bachés_tailleHO_vue1.png" alt="WagonBacheTailleHOvue1" id="BacheTailleHOVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_bachés/Taille HO/wagon_bachés_tailleHO_vue2.png" alt="WagonBacheTailleHOvue2" id="BacheTailleHOVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_bachés/Taille HO/wagon_bachés_tailleHO_vue3.png" alt="WagonBacheTailleHOvue3" id="BacheTailleHOVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_bachés/Taille HO/wagon_bachés_tailleHO_vue4.png" alt="WagonBacheTailleHOvue4" id="BacheTailleHOVue4">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_bachés/Taille HO/wagon_bachés_tailleHO_vue5.png" alt="WagonBacheTailleHOvue5" id="BacheTailleHOVue5">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droiteZBache">
    <p>Prix unitaire : 50€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="description">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Wagon bâché exploité par la compagnie SNCF entre 1971 et 2004. <br>
    Ce modèle réduit à été fabriqué par Marklin avec la réference 47118-03 en taille HO. <br>
    Sa longueur hors tampon est de 229mm (22.9cm).
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>