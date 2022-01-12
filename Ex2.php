<?php 
// Ex2 :Ecrire un algorithme qui demande un nombre compris entre 10 et 20, jusqu’à ce que la réponse convienne. En cas de réponse supérieure à 20, on fera apparaître un message : 
// « Plus petit ! », et inversement, « Plus grand ! » si le nombre est inférieur à 10.

$y = (int)readLine ("Enter number between 10 and 20 :  ");
if ($y>=10 && $y <=20) {
    echo "That was a good answer";
} 
elseif ($y>20){
    echo "Your answer is bigger than 20  Try again";
}
else {
    echo "Your answer is smaller than 10   Try again";
}

?>