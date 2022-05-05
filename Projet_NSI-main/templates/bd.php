<?php

try {
    $bd = new PDO("mysql:dbname=pintracker;host:localhost;charset=utf8", "root", "");
    echo "La bdd est bien connecté";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
