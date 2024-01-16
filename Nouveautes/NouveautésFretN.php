<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM produit Where id_produit = 45");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PagePagroduitNouveautes.css">
  <title>Nouveau Wagon Fret Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="../PagesPrincipales/Les_Nouveautés.php">Retour vers les Nouveautés</a>
        <h1> Nouveau Wagon de Fret a parois Taille N</h1>
    </div>
    <?php
            while ($et = $ps->fetch()) {
        ?>
<div class="NouveauFretTailleN">
<img src="./Images/Nouveautés/<?php echo $et["Vue1"] ?>" alt="NouveauFret" id="NouveauFretTailleNVue1">
<div class="droite">
<p>Prix unitaire : <?php echo $et ["prix_produit"]?> € </p>
       <a href="../PagesPrincipales/Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionNNouveauFret">
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




