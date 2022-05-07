<?php

include("templates/top.php");
require_once("templates/bd.php");

// $sql = "INSERT INTO user (first_name, second_name, birthday, size) VALUES(?, ?, ?)";

// $stmt = $bd->prepare($sql);
// $stmt->execute();
?>

<link rel="stylesheet" type="text/css" href="styles/inscription.css">
</head>


<div class="container">
    <div class="left">
        <div class="header">
            <h2 class="animation a1">Inscription</h2>
            <h4 class="animation a2">Inscrivez vous en remplissant le formulaire ci-dessous :</h4>
        </div>

        <form action="" class="form">
            <input type="text" class="form-field animation a3" placeholder="Pseudo">
            <input type="email" class="form-field animation a4" placeholder="Adresse mail">
            <input type="password" class="form-field animation a5" placeholder="Mot de passe">
            <input name="confirm_password" type="password" class="form-field animation a6" placeholder="Confirmer votre mot de passe">
            <input type="number" id="poids" name="poids" min="0" max="600" class="form-field animation a7" placeholder="Poids">
            <input type="number" id="age" name="age" min="10" max="99" class="form-field animation a8" placeholder="Age">
            <input type="number" id="taille" name="taille" min="1" max="2.5" class="form-field animation a9" placeholder="Taille">

            <div class="radio form-field animation a9">
                <input type="radio" id="homme" name="sexe" value="homme" class=" animation a11">
                <label for="homme" class="animation a10">Homme</label>

                <input type="radio" id="femme" name="sexe" value="femme" class=" animation a11">
                <label class="sexe" for="femme" class="animation a10">Femme</label>
            </div>

            <p class="animation a14"><a href="#">Mot de passe oublié</a></p>
            <input type="submit" value="Valider" class="animation a15">
        </form>



    </div>
    <div class="right"></div>
</div>




<?php
include("templates/bottom.php")
?>