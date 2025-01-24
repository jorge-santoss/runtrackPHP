<?php

function nombres_premiers($nombre) {
    if ($nombre < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($nombre); $i++) {
        if ($nombre % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 2; $i <= 1000; $i++) {
    if (nombres_premiers($i)) {
        echo $i . "<br>";
    }
}
?>


<!--  for ($i = 1; $i <= 1000; $i+=2) -->
<!--  echo $1 . "<br>" -->