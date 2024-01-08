<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitVoituresVoy.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
   <title>Voitures de Voyageurs Taille G</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="../PagesPrincipales/Voitures_Voyageurs.php">Retour vers les Voitures de Voyageurs</a>
        <h1>Voitures de Voyageurs Taille G</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Voiture_voyageurs/Taille G/voiture_voyageurs_talleG_vue1.png" alt="VoituresVoyageursTailleGvue1" id="VoituresVoyageursTailleGVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Voiture_voyageurs/Taille G/voiture_voyageurs_talleG_vue2.png" alt="VoituresVoyageursTailleGvue2" id="VoituresVoyageursTailleGVue2">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 280€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionGVoy">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Voiture de voyageurs  mise en service par la compagnie ferroviaire allemande RHB  en 2005 et elle est encore utilisée aujourd’hui, 
    Ce modèle réduit à été fabriqué par LGB avec la réference 33100 en taille G.
    La longueur totale de la voiture est de 770mm (77cm).
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>