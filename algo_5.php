<?php
/*
/
 FONCTION recupClef(position_x,position_y,tab)
 variable

 position_c1_x=1
 position_c1_y=3

 
 position_c2_x=0
 position_c2_y=4

 
 position_c3_x=5
 position_c3_y=3

 debut 

Si position_c1_x=position_X et position_c1_y=position_y:

tab.insere("c1")
fin si

Si position_c2_x=position_X et position_c2_y=position_y:

tab.insere("c2")
fin si

Si position_c3_x=position_X et position_c3_y=position_y:

tab.insere("c3")
fin si

fin 
*/
function recupClef($position_x,$position_y,$tab){
    
 $position_c1_x=1;
 $position_c1_y=3;
 
 $position_c2_x=0;
 $position_c2_y=4;

 $position_c3_x=5;
 $position_c3_y=3;

if($position_x=$position_c1_x && $position_y=$position_c1_y){
    $tab["cle1"]=1;
};

if($position_x=$position_c2_x && $position_y=$position_c2_y){
    $tab["cle2"]=2;
};

if($position_x=$position_c3_x && $position_y=$position_c3_y){
    $tab["cle3"]=3;
};
};


$position_x_debut=0;
$position_y_debut=0;
$position_x_arrive=10;
$position_Y_arrive=10;
$tabCle=[];

while($position_x_debut!=$position_x_arrive && $position_y_debut!=$position_Y_arrive && $tabCle!=3){
    positionDep($position_x,$position_y);
    recupClef($position_x,$position_y,$tab);
  echo $tab;
};
?>