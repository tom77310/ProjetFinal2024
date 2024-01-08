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
<div class="VoiesTailleZ">
<img src="./Images/Voies/Taille Z/voie_tailleZ.png" alt="VoiesTailleZvue1" id="VoiesTailleZVue1">
<div class="droiteZVoies">
    <p>Prix unitaire : 5€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionZVoies">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   Cette rails courbée est fabriquée en plastique par Marklin sous la réference MA8591. 
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
</html>