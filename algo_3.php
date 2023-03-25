<?php
/*

fonction positionDep(position_x,position_y)
variable

sens==""

debut
sens==""

si sens=="haut"  
position_y=position_y+1
finsi
si sens=="bas"    
position_y=position_y-1
finsi
si sens=="gauche"    
position_x=position_x-1
finsi
si sens=="droit"   
position_x=position_x+1
finsi

*/

function positionDep($position_x,$position_y){
    $sens="";
    $deplacement_nom=["Haut","Bas","Droit","Gauche"];

    switch($deplacement_nom){
        case "Haut":
            $position_y=$position_y+1;
            break;
        
        case "Bas":
                $position_y=$position_y-1;
                break;

        case "Droit":
            $position_x=$position_x+1;
            break;

        case "Gauche":
                $position_x=$position_x-1;
                break;
            
         default:
         echo "L'entrée n'est pas correcte";
         break;

    return($sens);
    }
 
}



?>