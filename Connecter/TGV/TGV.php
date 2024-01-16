<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagepresentation Where id = 12");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/TGV.css">
    <title>Les TGV</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    require_once("./Header.php");
    ?>
    <!-- Body -->
    <h1>Les TGV</h1>
    <?php
            while ($et = $ps->fetch()) {
        ?>
    <div class="TGV">
        <div class="TGVHO">
            <a href="./TGVHO.php"><img src="./Images/TGV/TailleHO/<?php echo $et["TailleHO"] ?>" alt="TGVTailleHO" id="TGVHO"></a>
            <p>TGV Taille HO</p>
        </div>
        <div class="TGVN">
            <a href="./TGVN.php"><img src="./Images/TGV/TailleN/<?php echo $et["TailleN"] ?>" alt="TGVTailleN" id="TGVN"></a>
            <p>TGV Taille N</p>
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




