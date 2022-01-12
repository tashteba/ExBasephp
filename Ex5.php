<?php

// EX 5 Ecrire un algorithme qui demande un nombre de départ, et qui ensuite écrit la table de multiplication de ce
// nombre, présentée comme suit (cas où l'utilisateur entre le nombre 7) : Table de 7 : 7 x 1 = 7 7 x 2 = 14 7 x 3 = 21 ... 7 x 10 = 70

$numberMulti = (int) readline ("Enter any number and i will give you multi by one to ten numbers :");
for ($x=0; $x<=10; $x++){
    $resulta = $x * $numberMulti;
    echo "$numberMulti * $x = $resulta ";
}


?>