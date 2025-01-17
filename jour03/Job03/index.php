
<?php

$str = "I'm sorry Dave I'm afraid I can't do that";


function isVowel($char) {
  
    $char = strtolower($char);
 
    return in_array($char, ['a', 'e', 'i', 'o', 'u']);
}


for ($i = 0; $i < strlen($str); $i++) {

    $char = $str[$i];
  
    if (isVowel($char)) {
      
        echo $char;
    }
} 
