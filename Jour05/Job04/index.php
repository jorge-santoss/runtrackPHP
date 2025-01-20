

<?php

function calcule($numero1, $operation, $numero2) {
    $resultat = 0;

    if ($operation == '+') {
        $resultat = $numero1 + $numero2;
    } elseif ($operation == '-') {
        $resultat = $numero1 - $numero2;
    } elseif ($operation == '*') {
        $resultat = $numero1 * $numero2;
    } elseif ($operation == '/') {
            $resultat = $numero1 / $numero2;
    } elseif ($operation == '%') {
            $resultat = $numero1 % $numero2;
        } 
    return $resultat;
}

echo calcule(18, '+', 7); 
?>