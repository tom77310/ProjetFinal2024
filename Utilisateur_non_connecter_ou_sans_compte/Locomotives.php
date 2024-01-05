<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Locomotives.css">
    <title>Les Locomotives</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    require_once("./Header.php");
    ?>
    <!-- Body -->
    <h1>Les Locomotives </h1>
    <div class="Locomotive">
        <!-- <div class="LocmotiveHaut"> -->
        <div class="LocomotiveVapeur">
            <a href="./LocomotiveVapeur.php"><img src="./Images/Le_materiel_roulant/presentations locomotives.png" alt="PresentationLocoVapeur" id="LocomotiveVapeur"></a>
            <p>Locomotives a Vapeur</p>
        </div>
        <div class="LocomotiveDiesel">
            <a href="./LocoDiesel.php"><img src="./Images/Le_materiel_roulant/Loco/loco_diesel/Taille HO/loco_diesel_tailleHO_vue1.png" alt="PresentationLocoDiesel" id="LocomotiveDiesel"></a>
            <p>Les Locomotives Diesel</p>
        </div>
        <div class="LocomotiveElec">
            <a href="./LocoElec.php"><img src="./Images/Le_materiel_roulant/Loco/loco elec/Taille HO/Loco_elec-tailleHO_vues1.png" alt="PresentationLocoElec" id="LocomotiveElec"></a>
            <p>Locomotive Electrique</p>
        </div>
        <!-- </div> -->

    </div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>

</html>