<?php 
// Ex 3 Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants. Par exemple, 
// si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27.

$apreTenNumbers = (int)readLine ("Enter any number and i will give you 10 numbers after :");
$x = 1;
while ($x <= 10){
    $newsNumber = $apreTenNumbers+$x;
    echo "-- $newsNumber ";
    $x++;
}

?>