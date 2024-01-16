<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 29");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Citerne Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titreZCiterne">
        <a href="./WagonCiterne.php">Retour vers les wagons Citerne</a>
        <h1>Lot de 3 Wagons Citerne Taille Z</h1>
    </div>
    <!-- Carrousel -->
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
<img src="./Images/Citerne/TailleZ/<?php echo $et["Vue1"] ?>" alt="CiterneTailleZVue1" id="CiterneTailleZVue1">
    </div>
    <div class="carousel-item">
<img src="./Images/Citerne/TailleZ/<?php echo $et["Vue2"] ?>" alt="CiterneTailleZVue2" id="CiterneTailleZVue2">
    </div>
    <div class="carousel-item">
<img src="./Images/Citerne/TailleZ/<?php echo $et["Vue3"] ?>" alt="CiterneTailleZVue3" id="CiterneTailleZVue3">
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
<div class="descriptionZCiterne">
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