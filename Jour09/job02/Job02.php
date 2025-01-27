<?php

$pdo = new PDO('mysql:host=localhost;dbname=jour10;charset=utf8', 'root', '');
 
var_dump($pdo);

$sql = "SELECT * FROM `salles` WHERE `nom` IN (`Lounge`, `Studio Son`, `Broadcasting`)";

$query = $pdo -> prepare ("$sql");


$query -> execute ( );

$pdo = $query->fetchALL(PDO::FETCH_ASSOC);

  var_dump($pdo);

 ?>
