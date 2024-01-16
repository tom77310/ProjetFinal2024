<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 12");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Conteneur Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonConteneur.php">Retour vers les wagons de Fret Plat Porte Conteneur</a>
        <h1>Lot de 3 Wagons de Fret Plat Porte Conteneur Taille N</h1>
    </div>
    <!-- Carrousel -->
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
<img src="./Images/Conteneur/TailleN/<?php echo $et["Vue1"] ?>" alt="ConteneurTailleNVue1" id="ConteneurTailleNVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Conteneur/TailleN/<?php echo $et["Vue2"] ?>" alt="ConteneurTailleNVue2" id="ConteneurTailleNVue2">
    </div>
    <div class="carousel-item">
<img src="./Images/Conteneur/TailleN/<?php echo $et["Vue3"] ?>" alt="ConteneurTailleNVue3" id="ConteneurTailleNVue3">
    </div>
    <div class="carousel-item">
<img src="./Images/Conteneur/TailleN/<?php echo $et["Vue4"] ?>" alt="ConteneurTailleNVue4" id="ConteneurTailleNVue4">
    </div>
    <div class="carousel-item">
<img src="./Images/Conteneur/TailleN/<?php echo $et["Vue5"] ?>" alt="ConteneurTailleNVue5" id="ConteneurTailleNVue5">
    </div>
    <div class="carousel-item">
<img src="./Images/Conteneur/TailleN/<?php echo $et["Vue6"] ?>" alt="ConteneurTailleNVue6" id="ConteneurTailleNVue6">
    </div>
    <div class="carousel-item">
<img src="./Images/Conteneur/TailleN/<?php echo $et["Vue7"] ?>" alt="ConteneurTailleNVue7" id="ConteneurTailleNVue7">
    </div>
    <div class="carousel-item">
<img src="./Images/Conteneur/TailleN/<?php echo $et["Vue8"] ?>" alt="ConteneurTailleNVue8" id="ConteneurTailleNVue8">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="../PagesPrincipales/Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionNConteneur">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   <?php 
    echo $et ["detail_produit"] 
    ?>
        <?php
            }
        ?>
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>











