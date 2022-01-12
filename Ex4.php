<?php
//Ex 4 Réécrire l'algorithme précédent, en utilisant cette fois l'instruction Pour (Si ce n'est pas déjà le cas)

$afterTenNumbers = (int) readLine ("Enter any number and i will give you 10 numbers after :");
for ($x = 0; $x <= 10; $x++){
    $newNumber = $afterTenNumbers + $x;
    echo " '$newNumber'\r\n ";
    
}

?>