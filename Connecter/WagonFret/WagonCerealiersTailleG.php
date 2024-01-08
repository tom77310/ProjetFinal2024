<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Cerealier Taille G</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titreHOCerealier">
        <a href="./WagonCerealiers.php">Retour vers les Wagons Cerealiers</a>
        <h1>Wagon Cerealier Taille G</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/Wagon_cerealers/Taille G/wagon_cerealier_tailleG_vue1.png" alt="WagonCerealierTailleGvue1" id="CerealierTailleGVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/Wagon_cerealers/Taille G/wagon_cerealier_tailleG_vue2.png" alt="WagonCerealierTailleGvue2" id="CerealierTailleGVue2">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 240€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionGCerealier">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Wagon cerealier exploité par la compagnie ferroviaire suisse RHB depuis 2005 et il est toujours utilisé aujourd’hui, <br>
    fabriquer par LGB avec la réference 46696 en taille G.
    Il mesure 550 mm (55cm).
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>