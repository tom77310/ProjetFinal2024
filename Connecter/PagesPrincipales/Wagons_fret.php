<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/WagonsFret.css">
    <title>Les Wagons de Fret</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    require_once("./Header.php");
?>
    <!-- Body -->
<h1>Les Wagons de Fret </h1>
<div class="WagonsFret">
    <div class="WagonsFretHaut">
        <div class="WagonCouvert">
            <a href="../WagonFret/WagonCouvert.php"><img src="./Images/WagonFret/wagon_fret_couvert_page_wagon_fret.png" alt="PresentationWagonCouvert" id="WagonCouvert"></a>
            <p>Wagon de Fret Type Couvert</p>
        </div>
        <div class="WagonConteneur">
            <a href="../WagonFret/WagonConteneur.php"><img src="./Images/WagonFret/wagon_fret_plat_porte_container_HO.png" alt="PresentationWagonConteneur" id="WagonConteneur"></a>
            <p>Wagon de Fret type plat porte conteneur</p>
        </div>
        <div class="WagonRebord">
            <a href="../WagonFret/WagonRebord.php"><img src="./Images/WagonFret/wagon-plat a rebord.png" alt="PresentationWagonRebord" id="WagonRebord"></a>
            <p>Wagon de Fret type plat à rebord</p>
        </div>
    </div>
    <div class="WagonsFretBas">
        <div class="WagonCiterne">
            <a href="../WagonFret/WagonCiterne.php"><img src="./Images/WagonFret/wagon_citerne.jpg" alt="PresentationWagonCiterne" id="WagonCiterne"></a>
            <p>Wagon de Fret Type Citerne</p>
        </div>
        <div class="WagonBache">
            <a href="../WagonFret/WagonBache.php"><img src="./Images/WagonFret/wagon_bache.jpg" alt="PresentationWagonBache" id="WagonBache"></a>
            <p>Wagon de Fret type Bachés</p>
        </div>
        <div class="WagonCerealier">
           <a href="../WagonFret/WagonCerealiers.php"><img src="./Images/WagonFret/wagon_cerealier.jpg" alt="PresentationWagonCerealier" id="WagonCerealier"></a>
            <p>Wagon de Fret type Céréaliers</p>
        </div>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>