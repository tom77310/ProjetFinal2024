<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/WagonConteneur.css">
    <title>Les Wagons de Fret</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    include("./Header.php");
?>
    <!-- Body -->
<h1>Les Wagons de Fret </h1>
<div class="WagonsConteneur">
    <div class="WagonsConteneurHaut">
        <div class="WagonConteneurTailleHO">
            <a href="./WagonConteneurTailleHO.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_plat_porte_conteur/page_produit_HO/wagon_porte_containeur_taille_HO_vue1.png" alt="WagonConteneurTailleHO" id="WagonConteneurTailleHO"></a>
            <p>Wagon de Fret Type Plat Porte Conteneur Taille HO</p>
        </div>
        <div class="WagonConteneurTailleZ">
           <a href="./WagonConteneurTailleZ.php"> <img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_plat_porte_conteur/page_produit_z/wagon_porte_containeur_taille_Z_vue1.png" alt="nWagonConteneurTailleZ" id="WagonConteneurTailleZ"></a>
            <p>Wagon de Fret type Plat Porte Conteneur Taille Z</p>
        </div>
    </div>
    <div class="WagonsConteneurBas">
        <div class="WagonConteneurTailleN">
            <a href="./WagonConteneurTailleN.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_plat_porte_conteur/page_produit_n/wagon_porte_containeur_taille_N_vue1.png" alt="WagonConteneurTailleN" id="WagonConteneurTailleN"></a>
            <p>Wagon de Fret Type Plat Porte Conteneur Taille N</p>
        </div>
        <div class="WagonConteneurTailleG">
            <a href="./WagonConteneurTailleG.php"><img src="./Images/Le_materiel_roulant/Wagon_fret/Wagon_plat_porte_conteur/page_produit_g/wagon_porte_containeur_taille_G_vue1.png" alt="WagonConteneurTailleG" id="WagonConteneurTailleG"></a>
            <p>Wagon de Fret type Plat Porte Conteneur Taille G</p>
        </div>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>