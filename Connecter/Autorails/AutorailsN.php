<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 32");
$ps->execute();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitAutomotrices.css">
  <title>Autorails Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./Autorails.php">Retour vers les Autorails</a>
        <h1>Autorail Taille N</h1>
    </div>
    <?php
            while ($et = $ps->fetch()) {
        ?>
    <div class="AutorailsN">
    <img src="./Images/Autorails/TailleN/<?php echo $et["Vue1"] ?>" alt="AutorailsTailleGVue1" id="AutorailsTailleNVue1">
<div class="droiteNAutorails">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="../PagesPrincipales/Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionNAutorails">
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





