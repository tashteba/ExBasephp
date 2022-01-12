<?php

// EX 8 Réécrire l’algorithme précédent, mais cette fois-ci on ne connaît pas d’avance combien l’utilisateur souhaite saisir de nombres. 
//La saisie des nombres s’arrête lorsque l’utilisateur entre un zéro.

echo "Please enter numbers and i will give you the biggest number you can stop when you entre number 0 ";
$arr = [];
do  {
    $newArray =readLine ("Number :");
    array_push($arr,$newArray);
} while ($newArray != 0);
echo "The biggest number is " . max($arr);

?>