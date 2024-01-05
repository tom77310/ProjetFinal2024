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
        <a href="./Les_Nouveautés.php">Retour vers les Nouveautés</a>
        <h1> Nouvelles Voitures de Voyageurs en Taille HO</h1>
    </div>
<div class="NouveauFretTailleN">
<img src="./Images/Nouveautés/voitures de voyageurs nouveauté.png" alt="NouveauVoyHOvue1" id="NouveauVoitureVoyTailleHOVue1">
<div class="droite">
    <p>Prix unitaire : 75€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionNNouveauFret">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
    Voitures de voyageurs en taille HO exploitée par la compagnie allemande DB, entre 1990 et 2004. <br>
    Les 3 voitures accrochées font une longueur de 909mm (90cm). 
    </p>
</div>

    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
</html>