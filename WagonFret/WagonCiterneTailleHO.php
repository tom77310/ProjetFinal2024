<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 27");
$ps->execute();
?>


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
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
<img src="./Images/Citerne/TailleHO/<?php echo $et["Vue1"] ?>" alt="CiterneTailleHOVue1" id="CiterneTailleHOVue1">
    </div>
    <div class="carousel-item">
<img src="./Images/Citerne/TailleHO/<?php echo $et["Vue2"] ?>" alt="CiterneTailleHOVue2" id="CiterneTailleHOVue2">
    </div>
    <div class="carousel-item">
<img src="./Images/Citerne/TailleHO/<?php echo $et["Vue3"] ?>" alt="CiterneTailleHOVue3" id="CiterneTailleHOVue3">
    </div>
    <div class="carousel-item">
<img src="./Images/Citerne/TailleHO/<?php echo $et["Vue4"] ?>" alt="CiterneTailleHOVue4" id="CiterneTailleHOVue4">
    </div>
    <div class="carousel-item">
<img src="./Images/Citerne/TailleHO/<?php echo $et["Vue5"] ?>" alt="CiterneTailleHOVue5" id="CiterneTailleHOVue5">
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
<div class="descriptionHOCiterne">
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