<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 26");
$ps->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Wagon de Fret Citerne Taille G</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonCiterne.php">Retour vers les Wagons Citernes</a>
        <h1>Wagon Citerne Taille G</h1>
    </div>
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div class="WagonCiterneTailleG">
<img src="./Images/Citerne/TailleG/<?php echo $et["Vue1"] ?>" alt="CiterneTailleGVue1" id="CiterneTailleGVue1">
<div class="droiteGCiterne">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="../PagesPrincipales/Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionGCiterne">
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