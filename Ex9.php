<?php
// Ex 9  Lire la suite des prix (en euros entiers et terminée par zéro) des achats d’un client. Calculer la somme qu’il doit, lire la somme qu’il paye, et simuler la remise de la monnaie en affichant les textes "10 Euros", 
//"5 Euros" et "1 Euro" autant de fois qu’il y a de coupures de chaque sorte à rendre.


// *for productes which client buy.
echo "Please enter prices of prudects which you take it and for stopping entre number [0]";
$arr = [];
do  {
    $newArray = (int) readLine ("Product :");
    array_push($arr,$newArray);
} while ($newArray != 0 && $newArray != null);
echo "The total is " . "\n" . array_sum($arr) . "   ";

// for come back the money fot clients (just for digits and unites).

$moneyBuy= readLine ("Enter the money which client buy : ") ;
 $resteMoney =  $moneyBuy  - array_sum($arr)  ;
 
// $numberDeDixEuro = ($resteMoney / 10 ) % 10 ;
//     $numberDeUnEuro = $resteMoney % 10 ;
// echo "Pices of ten € is  " . $numberDeDixEuro . "  the pices of one € is " . $numberDeUnEuro . "\n" ;


// for come back the money fot clients (for digits and five and unites).
echo "  still " . $resteMoney . "  for your client" ;

$numberDeDixEuro = 10 ;
$numberDeCinqEuro = 5;

$monie = intdiv($resteMoney,$numberDeDixEuro);
$resteMoney = $resteMoney - ($monie *10) ;
echo "The pices of ten is " . $monie ;

$monie = intdiv ($resteMoney,$numberDeCinqEuro);
$resteMoney = $resteMoney - ($monie *5);
echo " and the pices of five is " . $monie . " and the pices of one is  " . $resteMoney ;









//     while ($resteMoney >= 10) 
//     {
//         $numberDeDixEuro ++ ;
//         $resteMoney -10 ;
        
//     }



//     {
//     while ($resteMoney >= 5){
//     $numberDeCinqEuro ++ ;
//     $resteMoney - 5 ;
//    }

//     while ($resteMoney >= 1) {
//     $numberDeUnEuro ++ ;
//     $resteMoney - 1 ;
//     }


   
       


// echo "Pices of ten € is  " . $numberDeDixEuro . "  and the pices of five € is " . $numberDeCinqEuro  . "  and the pices of one € is " . $resteMoney . "\n" ;




// $numberDeDixEuro = 0 ;
// $numberDeCinqEuro = 0;
// $numberDeUnEuro = 0 ;
// while ($resteMoney >= 10){
//     $numberDeDixEuro ++ ;
//     $resteMoney -10 ;
// }
// while ($resteMoney >= 5){
//     $numberDeCinqEuro ++ ;
//     $resteMoney - 5 ;
// }
// while ($resteMoney >= 1){
//     $numberDeUnEuro ++ ;
//     $resteMoney - 1 ;
// }


?>