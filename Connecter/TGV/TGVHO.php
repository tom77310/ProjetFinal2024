<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 47");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitAutomotrices.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>TGV Taille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titreHOTGV">
        <a href="./TGV.php">Retour vers les TGV</a>
        <h1>TGV Ouigo Taille HO</h1>
    </div>
    <!-- Carrousel -->
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
<img src="./Images/TGV/TailleHO/<?php echo $et["Vue1"] ?>" alt="TGVTailleHOVue1" id="TGVTailleHOVue1">
    </div>
    <div class="carousel-item">
<img src="./Images/TGV/TailleHO/<?php echo $et["Vue2"] ?>" alt="TGVTailleHOVue2" id="TGVTailleHOVue2">
    </div>
    <div class="carousel-item">
<img src="./Images/TGV/TailleHO/<?php echo $et["Vue3"] ?>" alt="TGVTailleHOVue3" id="TGVTailleHOVue3">
    </div>
    <div class="carousel-item">
<img src="./Images/TGV/TailleHO/<?php echo $et["Vue4"] ?>" alt="TGVTailleHOVue4" id="TGVTailleHOVue4">
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
<div class="descriptionHOTGV">
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








