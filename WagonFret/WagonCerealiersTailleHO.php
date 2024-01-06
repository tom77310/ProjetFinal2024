<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Cerealier Taille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titreHOCerealier">
        <a href="./WagonCerealiers.php">Retour vers les Wagons Cerealiers</a>
        <h1>Wagon Cerealier Taille HO</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_cerealers/Taille HO/wagon_cerealiers_tailleHO_vue1.png" alt="WagonCerealierTailleHOvue1" id="CerealierTailleHOVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_cerealers/Taille HO/wagon_cerealiers_tailleHO_vue2.png" alt="WagonCerealierTailleHOvue2" id="CerealierTailleHOVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_cerealers/Taille HO/wagon_cerealiers_tailleHO_vue4.png" alt="WagonCerealierTailleHOvue3" id="CerealierTailleHOVue3">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 40€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionHOCerealier">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Wagon céréalier exploité par la compagnie ferroviaire SNCF entre 1945 et 1970. <br>
    Ce modèle à été fabriqué par REE avec la réference WB724 en taille HO.
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>