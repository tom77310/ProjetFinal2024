<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagesprincipales Where id = 4");
$ps->execute();
?>


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
    <?php
            while ($et = $ps->fetch()) {
        ?>
        <div class="locomotives">
            <a href="./Locomotives.php"><img src="./Images/Materiel Roulant/<?php echo $et["Image1"] ?>" alt="Locomotive" id="Locomotives"></a>
            <p>Les Locomotives</p>
        </div>
        <div class="wagonfret">
            <a href="./Wagons_fret.php"><img src="./Images/Materiel Roulant/<?php echo $et["Image2"] ?>" alt="WagonFret" id="WagonsFret"></a>
            <p>Les Wagons de fret</p>
        </div>
    </div>
        <div class="materielroulantbas">

            <div class="automotrices">
            <a href="./Automotrices.php"><img src="./Images/Materiel Roulant/<?php echo $et["Image3"] ?>" alt="Automotrices" id="automotrices"></a>
                <p>Les Automotrices</p>
            </div>
            <div class="VoituresVoyageurs">
            <a href="./Voitures_Voyageurs.php"><img src="./Images/Materiel Roulant/<?php echo $et["Image4"] ?>" alt="VoituresVoyageurs" id="VoituresVoyageurs"></a>
                <p>Les Voitures de Voyageurs</p>
            </div>
        </div>
        <?php
            }
        ?>
    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>

</html>




           


