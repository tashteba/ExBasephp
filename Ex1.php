<?php
// Ex1 : Ecrire un algorithme qui demande à l’utilisateur un nombre compris entre 1 et 3 jusqu’à ce que la réponse convienne.
$x = (int)readLine ("Enter number between 1 and 3 : ");
if ($x>0 && $x<=3){
    echo "It was a good answer";
}
else {
    echo "Try again it wasn't a good answer";
}

?>














