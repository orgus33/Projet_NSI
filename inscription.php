<?php

include("templates/top.php");
include_once("templates/bd.php");
$sql = "INSERT INTO user (first_name, second_name, birthday, size) VALUES(?, ?, ?)";

$stmt = $bd->prepare($sql);
$stmt->execute();
?>



<?php
include("templates/bottom.php")
?>