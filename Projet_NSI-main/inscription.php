<?php

include("templates/top.php")

?>

<link rel="stylesheet" type="text/css" href="styles/inscription.css">
</head>




<form id ="form1" method="GET" action="TP9-1_target.php">
    <h1 id="connect"> Inscription </h1>
  
    <div class="form">
        <label>Nom d'utilisateur </label>
        <input name="pseudo" type="text"> 
    </div>

    <div class="form">
        <label>Adresse mail : </label>
        <input name="mail" type="text"> 
    </div>

    <div class="form">
        <label>Mot de passe </label>
        <input name="mail" type="text"> 
    </div>
    <div  class="form">
        <label> Confirmer le mot de passe : </label> 
        <input name ="password"type="password">
    </div>

    <div class="form">
        <label id="poids_id"> Entrez votre poids (Kg) : </label>
        <input type="number" id="poids" name="poids"
       min="0" max="600">

    </div>

    <div class="form">
        <label> Entrez votre âge : </label>
        <input type="number" id="age" name="age"
       min="10" max="99">

    </div>

    <div class="form">
        <label class="sexe" for="homme">Homme</label>
        <input type="radio" id="homme" name="sexe" value="homme">
        
    </div>
    <div class="form">
        <label  class="sexe" for="femme">Femme</label>
        <input type="radio" id="femme" name="sexe" value="femme">
        
    </div>


    <div  class="form"> 
        <input type="submit" value="Valider">
    </div>

</form>
  



<?php
include("templates/bottom.php")
?>