<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduitVoies.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
  <title>Les Voies Taille G</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="../PagesPrincipales/Les_Voies.php">Retour vers les Voies</a>
        <h1>Wagon Voies Taille G</h1>
    </div>
<div class="VoiesTailleG">
<img src="./Images/Voies/taille G/voie_tailleG.png" alt="VoiesTailleGvue1" id="VoiesTailleGVue1">
<div class="droiteGVoies">
    <p>Prix unitaire : 6€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
</div>
<div class="descriptionGVoies">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
   Ce set comprend 2 aiguillages et 2 courbes de voies G fabriqués en plastique par Marklin sous la réference 23401. 
    </p>
</div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
</html>