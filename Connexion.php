<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Connexion.css">
    <title>Se connecter</title>
</head>

<body>
    <!-- Barre de navigation -->
    <?php
    require_once("./Header.php");
    ?>
    <!-- Body -->
    <div class="formulaireconnexion">
        <h1>Formulaire de Connexion</h1>
        <form action="../Utilisateur_connecter/test.php" method="post">
            <div class="formulaire">
                <div class="UserName">

                    <label for="UserName">Nom d'utilisateur</label>
                    <input type="text" name="UserName" id="UserName">
                </div>
                <br>
                <div class="MotDePasse">

                    <label for="Mdp">Mot de Passe</label>
                    <input type="password" name="Mdp" id="Mdp">
                </div>
                    <br>
                    <div class="BouttonConnexion">
                        <input type="button" value="Se connecter">
                    </div>

        </form>
            </div>
    </div>



    <!-- footer -->
    <?php
    require_once("./Footer.php");
    ?>
</body>

</html>