<?php

include("templates/top.php")

?>
<link rel="stylesheet" type="text/css" href="../styles/progression.css">
</head>

<body>
    <header>
        <h1 class="big-title"> PinTracker </h1>

        <div class="register">
            <a class="secondary-button" href="inscription.php">Mon compte</a>
        </div>
    </header>

    <h2>Ma progression</h2>

    <div class="sec-1">
        <div class="box">
            <h1 class="title">Journal de bord</h1>
            <div class="days">
                <div class="day">Lundi :</div>
                <div class="day">Mardi :</div>
                <div class="day">Mercredi :</div>
                <div class="day">Jeudi :</div>
                <div class="day">Vendredi :</div>
                <div class="day">Samedi :</div>
                <div class="day">Dimanche :</div>
            </div>

        </div>

        <div class="box">
            <h1 class="title">Statistique</h1>
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
    include("templates/bottom.php")
    ?>