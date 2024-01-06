<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Jquery -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- My  Script-->
    <script src="./js/Header.js"></script>
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>-->
   <!--  My CSS -->
    <link rel="stylesheet" href="./CSS/Header.css">

    <title>Header</title>
</head>

<body>
    <!--Barre de navigation  -->
    <nav class="container1">
        <a class="hideHover" href="./Accueil_non_connecter.php">
            <img id="logo" src="./Images/image_barre_de_nav/logo_site.png" alt="logo_site">
        </a>
        <div class="navCat" id="cat1">
            <div><a href="./Materiel_Roulant.php">Le materiel roulant</a></div>
        </div>
        <a class="hideHover navCat" href="./Les_Nouveautés.php">
            <div>Les nouveautés</div>
        </a>
        <a class="hideHover navCat" href="./Tailles.php">
            <div>Tailles existantes</div>
        </a>
        <a class="hideHover navCat" href="./Les_Voies.php">
            <div>Les voies</div>
        </a>
        <a class="hideHover navCat" href="./Connexion.php">
            <div>Se connecter</div>
        </a>
        <a class="hideHover navCat" href="./Inscription.php">
            <div>S'inscrire</div>
        </a>
    </nav>
    <!-- Menu déroulant -->
    <nav class="container2">
        <div class="navCat2" id="boxNav">
            <div>
                <a id="menuLink" href="./Wagons_fret.php">Les Wagons de Fret</a>
            </div>
            <div>
                <a id="menuLink1" href="../PagesPrincipales/Locomotives.php">Les Locomotives</a>
            </div>
            <div>
                <a id="menuLink2" href="./Voitures_Voyageurs.php">Les Voitures de Voyageurs</a>
            </div>
            <div>
                <a id="menuLink2" href="./Automotrices.php">Les Automotrices</a>
            </div>
        </div>
    </nav>

</body>

</html>