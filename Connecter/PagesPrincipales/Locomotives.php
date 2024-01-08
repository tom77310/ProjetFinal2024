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
        <div class="LocomotiveVapeur">
            <a href="../Locomotives/LocomotiveVapeur.php"><img src="./Images/Materiel Roulant/presentations locomotives.png" alt="PresentationLocoVapeur" id="LocomotiveVapeur"></a>
            <p>Locomotives a Vapeur</p>
        </div>
        <div class="LocomotiveDiesel">
            <a href="../Locomotives/LocoDiesel.php"><img src="./Images/Locomotives/loco_diesel_tailleHO_vue1.png" alt="PresentationLocoDiesel" id="LocomotiveDiesel"></a>
            <p>Les Locomotives Diesel</p>
        </div>
        <div class="LocomotiveElec">
            <a href="../Locomotives/LocoElec.php"><img src="./Images/Locomotives/Loco_elec-tailleHO_vues1.png" alt="PresentationLocoElec" id="LocomotiveElec"></a>
            <p>Locomotive Electrique</p>
        </div>
    </div>


    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>

</html>