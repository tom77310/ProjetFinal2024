<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitVoies.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Les Voies Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./Les_Voies.php">Retour vers les Voies</a>
        <h1> Voies Taille N</h1>
    </div>
<div class="VoiesTailleN">
<img src="./Images/Voies/Taille N/voieTailleN.png" alt="VoiesTailleNvue1" id="VoiesTailleNVue1">
<div class="droiteNVoies">
    <p>Prix unitaire : 3€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionNVoies">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   Cette rails courbée est fabriquée en plastique par minitrix sous la ref 14929.  
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
</html>