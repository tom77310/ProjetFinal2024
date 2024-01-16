<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 33");
$ps->execute();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitLoco.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Locomotive Diesel Taille G</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./LocoDiesel.php">Retour vers les Locomotive Diesel</a>
        <h1>Locomotive Diesel Taille G</h1>
    </div>
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div class="LocoDieselTailleG">
<img src="./Images/Loco/Diesel/TailleG/<?php echo $et["Vue1"] ?>" alt="LocoDieselTailleGVue1" id="LocoDieselTailleGVue1">
<div class="droiteGDiesel">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="../PagesPrincipales/Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionGDiesel">
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
</html>