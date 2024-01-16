<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 21");
$ps->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
  <title>Wagon de Fret Bachés Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonBache.php">Retour vers les Wagons Bachés</a>
        <h1>Lot de 3 Wagons Bachés Taille Z</h1>
    </div>
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div class="WagonBacheTailleZ">
<img src="./Images/Bache/TailleZ/<?php echo $et["Vue1"] ?>" alt="BacheTailleZVue1" id="BacheTailleZVue1">
<div class="droiteZBache">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionZBache">
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