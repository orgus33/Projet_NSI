<?php

include("templates/top.php");
require_once("templates/bd.php");
?>

<link rel="stylesheet" type="text/css" href="styles/connexion.css">
</head>

<?php
if (isset($_GET['mail'])) {

  // $sql = "SELECT email FROM user";
  // $sql->query();

  // $stmt->execute();
} else {
?>
  <form id="form1" method="GET" action="TP9-1_target.php">
    <h1 id="connect"> Connexion </h1>
    <div class="form">
      <label>Adresse mail : </label>
      <input name="mail" type="text">
    </div>
    <div class="form">
      <label> Mot de passe : </label>
      <input name="password" type="password">
    </div>
    <div class="form">
      <input type="submit" value="Valider">
    </div>

  </form>


<?php
}
?>






<?php
include("templates/bottom.php")

?>