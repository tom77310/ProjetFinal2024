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
    <!-- Carrousel -->
    <div class="AutorailsN">
<img src="./Images/Le_materiel_roulant/Automotrices/Autorails/Taille N/autorail_tailleN_vue1.png" alt="AutorailsNvue1" id="AutorailsGvue1">
<div class="droiteNAutorails">
    <p>Prix unitaire : 2€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionNAutorails">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Cet autorail  a été mises en service  par la compagnie ferroviaire SNCF entre 1945 et 1970. <br>
    Ce modèle réduit a été fabriqué par TRAIN160 avec la réference 16065. 
    </p>
</div>

    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>

</html>