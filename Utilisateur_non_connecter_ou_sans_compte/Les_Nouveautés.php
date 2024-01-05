<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Nouveautes.css">
    <title>Les nouveautés</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    require_once("./Header.php");
?>
    <!-- Body -->
<h1>Les Nouveautés </h1>

<div class="nouveautes">

    <div class="NewWagonFret">
        <a href="./NouveautésFretN.php"><img src="./Images/Nouveautés/wagon_fret nouveauté_vue1.png" alt="NouveauWagonFret" id="NewWagonFret"></a>
        <p>Nouveau Wagon de fret en Taille N</p>
    </div>
    <div class="NewVoitureVoyageurs">
        <a href="./NouveautesVoitureVoyHO.php"><img src="./Images/Nouveautés/voitures de voyageurs nouveauté.png" alt="NewVoitureVoyageurs" id="NewVoitureVoyageurs"></a>
        <p>Nouvelle Voiture de voyageurs</p>
    </div>
</div>


<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>