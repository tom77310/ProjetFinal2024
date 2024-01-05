<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/PageProduit.css">
    <link rel="stylesheet" href="./CSS/Carrousel.css">
    <title>Wagon de Fret Rebord Taille N</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    include("./Header.php");
    ?>
    <!-- Body -->
    <div class="titre">
        <a href="./WagonRebord.php">Retour vers les wagons de Fret Plat a Rebord </a>
        <h1>Lot de 2 Wagons de Fret Plat a Rebord Taille N</h1>
    </div>
    <!-- Carrousel -->
    <div id="carousel-container">
        <div id="carousel">
            <div class="carousel-item">
                <img src="./Images/Le_materiel_roulant/Wagon_fret/wagon_plat_rebords/page_produit_n/image_wagon_plat_rebord_tailleN_vue1.png" alt="WagonRebordTailleNvue1" id="RebordTailleNVue1">
            </div>
            <div class="carousel-item">
                <img src="./Images/Le_materiel_roulant/Wagon_fret/wagon_plat_rebords/page_produit_n/image_wagon_plat_rebord_tailleN_vue2.png" alt="WagonRebordTailleNvue2" id="RebordTailleNVue2">
            </div>
            <div class="carousel-item">
                <img src="./Images/Le_materiel_roulant/Wagon_fret/wagon_plat_rebords/page_produit_n/image_wagon_plat_rebord_tailleN_vue3.png" alt="WagonRebordTailleNvue3" id="RebordTailleNVue3">
            </div>
        </div>
    </div>
    <div class="bouton">
        <button id="prev-btn" onclick="prevSlide()">Précédent</button>
        <button id="next-btn" onclick="nextSlide()">Suivant</button>
    </div>
    <div class="droite">
        <p>Prix unitaire : 50€ <br></p>
        <a href="./Connexion.php">Connectez-vous pour ajouter cet article a votre panier</a>
    </div>
    <div class="descriptionNRebord">
        <p>
            <span class="titre_description">Description du Produit :</span> <br>
            Lot de 2 Wagons plat a rebords, exploités par la compagnie ferroviaire autrichienne OBB entre 1971 et 1991.
            Ces wagons ont éte fabriquer par fleishmann avec la réference 845609 en taille N.
            Ils ont une longueur totale chacun sans les tampons de 136mm (13.6cm). Ils sont fabriquer en plastique et en métal.
        </p>
    </div>





    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>
<script src="./js/Carrousel.js"></script>

</html>