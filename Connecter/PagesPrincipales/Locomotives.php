<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagesprincipales Where id = 2");
$ps->execute();
?>


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
    <?php
            while ($et = $ps->fetch()) {
        ?>
    <div class="Locomotive">
        <div class="LocomotiveVapeur">
            <a href="../Locomotives/LocomotiveVapeur.php"><img src="./Images/Locomotives/<?php echo $et["Image1"] ?>" alt="LocomotiveVapeur" id="LocomotiveVapeur"></a>
            <p>Locomotives a Vapeur</p>
        </div>
        <div class="LocomotiveDiesel">
            <a href="../Locomotives/LocoDiesel.php"><img src="./Images/Locomotives/<?php echo $et["Image2"] ?>" alt="LocomotiveDiesel" id="LocomotiveDiesel"></a>
            <p>Les Locomotives Diesel</p>
        </div>
        <div class="LocomotiveElec">
            <a href="../Locomotives/LocoElec.php"><img src="./Images/Locomotives/<?php echo $et["Image3"] ?>" alt="LocomotiveElec" id="LocomotiveElec"></a>
            <p>Locomotives Electrique</p>
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




