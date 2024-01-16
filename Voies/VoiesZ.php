<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 52");
$ps->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitVoies.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Les Voies Taille Z</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="../PagesPrincipales/Les_Voies.php">Retour vers les Voies</a>
        <h1> Voies Taille Z</h1>
    </div>
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div class="VoiesTailleZ">
<img src="./Images/Voies/TailleZ/<?php echo $et["Vue1"] ?>" alt="VoieTailleZVue1" id="VoiesTailleZVue1">
<div class="droiteZVoies">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="../PagesPrincipales/Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionZVoies">
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




