<?php

include("templates/top.php")

?>

<link rel="stylesheet" type="text/css" href="styles/connexion.css">
</head>




<form id ="form1" method="GET" action="TP9-1_target.php">
  <h1 id="connect"> Connexion </h1>
  <div class="form">
    <label>Adresse mail : </label>
    <input name="mail" type="text"> 
  </div>
  <div  class="form">
  <label> Mot de passe : </label> 
    <input name ="password"type="password">
  </div>
  <div  class="form"> 
    <input type="submit" value="Valider">
  </div>

 </form>
  



<?php
  include("templates/bottom.php")

?>