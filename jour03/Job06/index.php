<?php
$str = "Les choses que l'on Possède finissent par nous posséder.";

$result = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {

    $result .= $str[$i];

    }

    echo $result;