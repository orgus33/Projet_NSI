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
            <div class="stats">
                <ul>
                    <li>Kilomètres : </li>
                    <li>Temps : </li>
                    <li>Pompes : </li>
                    <li>Abdo : </>
                </ul>
            </div>

            <div class="seance">
                <p>Séances effectué : 1 séance sur 4 réalisés </p>
            </div>

            <div class="streak">
                <p>Flammes : 15</p>
            </div>

        </div>

        <div class="box">
            <h1>Performance moyenne : </h1>
            <p>[Graphique]</p>
        </div>
    </div>


    <?php
    include("templates/bottom.php")
    ?>