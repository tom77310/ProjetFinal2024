<?php
require_once("../ConnexionBDD.php");
$ps = $BDD->prepare("SELECT * FROM pagesprincipales Where id = 1");
$ps->execute();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Automotrices.css">
    <title>Les Automotrices</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    require_once("./Header.php");
    ?>
    <!-- Body -->
    <h1>Les Automotrices</h1>
    <?php
            while ($et = $ps->fetch()) {
        ?>
        <div class="Autorails">
            <a href="../Autorails/Autorails.php"><img src="./Images/Automotrices/<?php echo $et["Image1"] ?>" alt="Autorails" id="Autorails"></a>
            <p>Les Autorails</p>
        </div>
        <div class="TGV">
            <a href="../TGV/TGV.php"><img src="./Images/Automotrices/<?php echo $et["Image2"] ?>" alt="TGV" id="TGV"></a>
            <p>Les TGV</p>
        </div>
    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
    <?php
            }
        ?>
</body>

</html>