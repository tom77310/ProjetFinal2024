<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/materielRoulant.css">
    <title>Le materiel Roulant</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    require_once("./Header.php");
    ?>
    <!-- Body -->
    <h1>Le Materiel Roulant</h1>
    <div class="materielroulant">

        <div class="locomotives">
            <a href="./Locomotives"><img src="./Images/Materiel Roulant/presentations locomotives.png" alt="presentation_locoVapeur" id="Locomotives"></a>
            <p>Les Locomotives</p>
        </div>
        <div class="wagonfret">
            <a href="./Wagons_fret.php"><img src="./Images/Materiel Roulant/presentation_wagon_fret.png" alt="presentationWagonFret" id="WagonsFret"></a>
            <p>Les Wagons de fret</p>
        </div>
    </div>
        <div class="materielroulantbas">

            <div class="automotrices">
                <a href="./Automotrices.php"><img src="./Images/Materiel Roulant/presentation automotrices.png" alt="presentationautomotrices" id="automotrices"></a>
                <p>Les Automotrices</p>
            </div>
            <div class="VoituresVoyageurs">
                <a href="./Voitures_Voyageurs.php"><img src="./Images/Materiel Roulant/presentation voitures de voyageurs.png" alt="presentationVoituresVoyageurs" id="VoituresVoyageurs"></a>
                <p>Les Voitures de Voyageurs</p>
            </div>
        </div>

    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>

</html>