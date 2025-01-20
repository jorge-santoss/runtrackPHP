<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = array("consonnes" => 0, "voyelles" => 0);

$vowels = array('a', 'e', 'i', 'o', 'u', 'y');
$consonants = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z');

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]);
    if (in_array($char, $vowels)) {
        $dic["voyelles"]++;
    } elseif (in_array($char, $consonants)) {
        $dic["consonnes"]++;
    }
}

// HTML table
echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody>";
echo "</table>";

?>
