<?php
/*
algo deplJ

variable

position_x_debut=0
position_y_debut=0
position_x_arrivé=10
position_Y_arrivé=10
nb_deplacement=0
deplacement_max=15

debut 

tant que position_x_debut!=position_x_arrivé et position_y_debut!=position_Y_arrivé et nb_deplacement<=deplacement_max:

faire nb_deplacment=nb_deplacement+1

fin tantque

if (nb_deplacement>deplacement_max)
affiche loser

sinon 

vous avez gagner

fin 
*/
$sens="";
$position_x_debut=0;
$position_y_debut=0;
$position_x_arrive=10;
$position_Y_arrive=10;
$nb_deplacement=0;
$deplacement_max=15;

while($position_x_debut!=$position_x_arrive && $position_y_debut!=$position_Y_arrive && $nb_deplacement<=$deplacement_max){
      $nb_deplacement=$nb_deplacement+1;
    
if($nb_deplacement>$deplacement_max){
    echo "Loser";
}elseif($nb_deplacement=$deplacement_max && $position_x_debut=$position_x_arrive &&  $position_y_debut=$position_Y_arrive){
    "Vous avez gagné";
};

 
}


?>