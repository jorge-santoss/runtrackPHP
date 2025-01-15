<?php
// Affiche "Hello LaPlateforme!" une première fois 
echo "Hello LaPlateforme! <br>";

// Affiche "Hello LaPlateforme!" une deuxième fois 

echo "HELLO LA PLATEFORME!"; 
?>



<?php

$test = "adrgjghnghn";

for ( $i=0; isset($test[$i]); $i++){

    echo $test[$i]. "<br>";
}


$test3= [2,4,7, "1"]
echo $test3[2]. "<br>";
foreach ($test3 as $value) {
    echo $value. "<br>;"  
}

$test2=['nom' =>"Jorge", "knom"="santos"];
foreach ($test2 as $key => $value) {
    # code...
    echo $key " :", $value [" nom:"], <br>"";
}


