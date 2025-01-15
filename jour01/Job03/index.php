<?php
// Déclaration des variables de types primitifs
$boolean = true; // Variable de type booléen
$integer = 42; // Variable de type entier
$string = "Hello LaPlateforme!"; // Variable de type chaîne de caractères
$float = 3.14; // Variable de type nombre à virgule flottante

// Génération du tableau HTML
echo "<table border='1'>";
echo "<thead>";
echo "<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr><td>Boolean</td><td>boolean</td><td>" . ($boolean ? 'true' : 'false') . "</td></tr>";
echo "<tr><td>Integer</td><td>integer</td><td>$integer</td></tr>";
echo "<tr><td>String</td><td>string</td><td>$string</td></tr>";
echo "<tr><td>Float</td><td>float</td><td>$float</td></tr>";
echo "</tbody>";
echo "</table>";
?>
