<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
  <title>Wagon de Fret Bachés Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonBache.php">Retour vers les Wagons Bachés</a>
        <h1>Wagon Bachés Taille N</h1>
    </div>
<div class="WagonBacheTailleN">
<img src="./Images/WagonFret/Wagon_bachés/Taille N/wagon_baché_tailleN_vues1.png" alt="WagonBacheTailleNvue1" id="BacheTailleNVue1">
<div class="droiteNBache">
    <p>Prix unitaire : 40€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionNBache">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Wagon bâché, exploités par la compagnie ferroviaire SNCF entre 1991 et 2004. <br>
    Ces wagons ont éte fabriquer par Fleishmann avec la réference 837704 en taille N. 
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
</html>