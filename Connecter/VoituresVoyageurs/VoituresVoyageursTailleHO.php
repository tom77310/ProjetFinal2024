<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitVoituresVoy.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
   <title>Voiture de Voyageurs Taille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="../PagesPrincipales/Voitures_Voyageurs.php">Retour vers les Voitures de Voyageurs</a>
        <h1>Voitures de Voyageurs Taille HO</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Voiture_voyageurs/Taille HO/Voiture_voyageurs_tailleHO_vue1.png" alt="VoituresVoyageursTailleHOvue1" id="VoituresVoyageursTailleHOVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Voiture_voyageurs/Taille HO/Voiture_voyageurs_tailleHO_vue2.png" alt="VoituresVoyageursTailleHOvue2" id="VoituresVoyageursTailleHOVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Voiture_voyageurs/Taille HO/Voiture_voyageurs_tailleHO_vue3.png" alt="VoituresVoyageursTailleHOvue3" id="VoituresVoyageursTailleHOVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Voiture_voyageurs/Taille HO/Voiture_voyageurs_tailleHO_vue4.png" alt="VoituresVoyageursTailleHOvue4" id="VoituresVoyageursTailleHOVue4">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 90€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionHOVoy">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Voiture de voyageur mise en service par la compagnie ferroviaire suisse CFF en 2005 et elle est actuellement encore exploitée <br>
    Ce modèle réduit à été fabriqué par LS MODELS avec la réference 47379f en taille HO.
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>