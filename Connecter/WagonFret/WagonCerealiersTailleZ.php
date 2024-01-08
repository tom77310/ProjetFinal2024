<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Cerealier Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titreZCerealier">
        <a href="./WagonCerealiers.php">Retour vers les wagons Cerealiers</a>
        <h1>Lot de 3 Wagons Cerealier Taille Z</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_cerealers/Taille Z/wagon_cerealier_tailleZ_vue1.png" alt="WagonCerealierTailleZvue1" id="CerealierTailleZVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_cerealers/Taille Z/wagon_cerealier_tailleZ_vue2.png" alt="WagonCerealierTailleZvue2" id="CerealierTailleZVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_cerealers/Taille Z/wagon_cerealier_tailleZ_vue3.png" alt="WagonCerealierTailleZvue3" id="CerealierTailleZVue3">
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
<div class="descriptionZCerealier">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   Wagon exploité par la compagnie ferroviaire SNCF entre 1971 et 2004. <br>
   Il a été fabriqué par azar modèle.
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>