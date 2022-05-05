<?php

session_start();
// $_SESSION['compte'] = "Robin";

include("templates/top.php");



include_once("templates/bd.php");

?>

<body>
   <header>
      <h1 class="big-title"> PinTracker </h1>

      <?php

      if (isset($_SESSION["compte"])) {
      ?>
         <div class="register">
            <a class="secondary-button" href="connexion.php"> Mon compte </a>
         </div>
   </header>
   <h2> Bonjour, <br>
      Bienvenue <?= $_SESSION["compte"] ?> !
   </h2>

   <div class="sec-1">
      <div class="box">
         <h1 class="title">Dernière performance</h1>
         <p>Entrainement par semaine : 4</p>
         <p>Temps : 45 min</p>
         <p>Séances : 3 séances</p>
         <p>Flammes : 15</p>
      </div>

      <div class="box">
         <h1 class="title">Ajouter une performance</h1>
         <form action="/">
            <div class="select-dropdown">
               <select name="type_sport">
                  <option value="course">Course</option>
                  <option value="musculation">Musculation</option>
               </select>
            </div>

            <input type="submit" value="Suivant →">
         </form>
      </div>
   </div>

<?php
      } else {
?>
   <div class="register">
      <a class="primary-button" href="connexion.php"> Connexion </a>
      <a class="secondary-button" href="inscription.php">Inscription</a>
   </div>
   </header>

   <h2> Bonjour, <br>
      Bienvenue !
   </h2>

   <div class="sec-1">
      <div class="box">
         <h1 class="title">Dernière performance</h1>
         <p>Veuillez vous connecter pour voir vos performance !</p>
      </div>

      <div class="box">
         <h1 class="title">Ajouter une performance</h1>
         <p>Veuillez vous connecter pour ajouter vos performances !</p>
      </div>
   </div>
<?php
      }
?>
</body>



<?php
include("templates/bottom.php")
?>