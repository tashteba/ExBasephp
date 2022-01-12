<?php

// EX 7 Ecrire un algorithme qui demande successivement 20 nombres à l’utilisateur, et qui lui dise ensuite quel était le plus grand parmi ces 20 nombres : Entrez le nombre numéro 1 : 12 Entrez le nombre numéro 2 : 14 etc. Entrez le nombre numéro 20 : 6 Le plus grand de ces nombres est :
// 14 Modifiez ensuite l’algorithme pour que le programme affiche de surcroît en quelle position avait été saisie ce nombre : C’était le nombre numéro 2
echo "Please enter twenty numbers and i will give you the biggest number  ";
$arr = [];
$o = 0;
$position = 1;
for ($x = 0; $x <20; $x++){
    $newArray =readLine ("Enter Number" . $position . ":");
    array_push($arr,$newArray);
    $position++;
}
$whereMynumer = array_search(max($arr),$arr);
echo "The biggest number is " . max($arr) . "  And this posistion is  " . ($whereMynumer +1) . "\n" ;

// pour la plus peiti .

// echo "Please enter twenty numbers and i will give you the smallest number  ";
// $arr = [];
// $o = 0;
// for ($x = 0; $x <20; $x++){
//     $newArray =readLine ("Number :");
//     array_push($arr,$newArray);
// }
// echo "The smallest number is " . min($arr);
