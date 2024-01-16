<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 50");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitVoies.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Les Voies Taille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="../PagesPrincipales/Les_Voies.php">Retour vers les Voies</a>
        <h1>Wagon Voies Taille HO</h1>
    </div>
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div class="VoiesTailleHO">
<img src="./Images/Voies/TailleHO/<?php echo $et["Vue1"] ?>" alt="VoieTailleHOVue1" id="VoiesTailleHOVue1">
<div class="droiteHOVoies">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="../PagesPrincipales/Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionHOVoies">
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



