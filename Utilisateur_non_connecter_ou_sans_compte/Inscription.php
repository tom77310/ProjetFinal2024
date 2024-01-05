<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Inscription.css">
    <title>S'inscrire</title>
</head>
<body>
        <!-- Barre de navigation -->
<?php
    require_once("./Header.php");
?>
    <!-- Body -->
    <div class="FormulaireInscription">
        <h1>Formulaire d'inscription</h1>
        <form action="" method="post">
            <div class="formulaire">
                <div class="Nom">
                    <label for="Nom">Nom</label>
                    <input type="text" name="Nom" id="Nom">
                </div>
                <div class="Prenom">
                    <label for="Prenom">Prenom</label>
                    <input type="text" name="Prenom" id="Prenom">
                </div>
                <div class="Email">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" id="Email">
                </div>
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
                    <input type="button" value="S'inscrire">
                </div>


            </div>
        </form>
    </div>
<!-- footer -->
<?php
require_once("./Footer.php");
?>
</body>
</html>