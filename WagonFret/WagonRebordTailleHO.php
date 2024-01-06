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
<title>Wagon de Fret Rebord Taille HO</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonRebord.php">Retour vers les wagons de Fret Plat a Rebord</a>
        <h1>Wagon de Fret Plat a rebord Taille HO</h1>
    </div>
    <!-- Carrousel -->
<div id="carousel-container">
  <div id="carousel">
    <div class="carousel-item">
        <img src="./Images/WagonFret/wagon_plat_rebords/page_produit_HO/image_wagon_plat_rebord_tailleHO_vue1.png" alt="WagonRebordTailleHOvue1" id="RebordTailleHOVue1">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/wagon_plat_rebords/page_produit_HO/image_wagon_plat_rebord_tailleHO_vue2.png" alt="WagonRebordTailleHOvue2" id="RebordTailleHOVue2">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/wagon_plat_rebords/page_produit_HO/image_wagon_plat_rebord_tailleHO_vue3.png" alt="WagonRebordTailleHOvue3" id="RebordTailleHOVue3">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/wagon_plat_rebords/page_produit_HO/image_wagon_plat_rebord_tailleHO_vue4.png" alt="WagonRebordTailleHOvue4" id="RebordTailleHOVue4">
    </div>
    <div class="carousel-item">
    <img src="./Images/WagonFret/wagon_plat_rebords/page_produit_HO/image_wagon_plat_rebord_tailleHO_vue5.png" alt="WagonRebordTailleHOvue5" id="RebordTailleHOVue5">
    </div>
  </div>
</div>
<div class="bouton">
    <button id="prev-btn" onclick="prevSlide()">Précédent</button>
    <button id="next-btn" onclick="nextSlide()">Suivant</button>
</div>
<div class="droite">
    <p>Prix unitaire : 45€ <br></p>
       <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
</div>
<div class="descriptionHORebord">
    <p>
   <span class="titre_description">Description du Produit :</span>  <br>
Wagon plat a rebord exploitée par la compagnie suisse CFF depuis 2005 et il est toujours en service aujourd’hui.
Ce modèle miniature a été fabriquer par Marklin avec la réference 47100 en taille HO. 
Il a une livrée jaune. Sa longueur totale hors tampon est de 229mm (22.9 cm). 
Il a de nombreux détails fidèle au modèle réel comme par exemple les bogies type Y 25 .
    </p>
</div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>
</html>