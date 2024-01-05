<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>     -->
<title>Wagon de Fret CouvertTaille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonCouvert.php">Retour vers les wagons de Fret Couvert</a>
        <h1>Wagon de Fret Couvert Taille HO</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_HO/Image_page_wagon_fret_couvert_vue1_HO.png" alt="WagonCouvertTailleHOvue1" id="CouvertTailleHOVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_HO/Image_page_produit_vue_2_wagon_fret_couvert_HO.png" alt="WagonCouvertTailleHOvue2" id="CouvertTailleHOVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_HO/Image_page_produit_vue_3_wagon_fret_couvert_HO.png" alt="WagonCouvertTailleHOvue3" id="CouvertTailleHOVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_couvert/page_produit_HO/Image_page_produit_vue_4_wagon_fret_couvert_HO.png" alt="WagonCouvertTailleHOvue4" id="CouvertTailleHOVue4">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 40€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="description">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
Wagon couvert de la compagnie ferroviaire Allemande DB,fabriquer par Marklin avec la réference MA46156 en taille HO. <br>
Wagon couvert, fonctionnant sous courant alternatif 3 rails, <br>
mise en service par la compagnie ferroviaire Deutshe Bundesbahn (DB) entre 1971 et 1991. <br>
Sa longueur est de 139mm (13,9cm).
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>