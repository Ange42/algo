 

<?php
/*
 Je vais crée un fonction me permettant de calculer mon score selon mes deplacement
pour cela

funtion score_depl(deplacement,score,point )
varible
deplacement==deplacement+1
score==score+point

debut 
deplacement haut
score_depl(deplacement,score,25)

deplacement bas 
score_depl(deplacement,score,90)

deplacement droit
score_depl(deplacement,score,70 )

deplacement gauche
score_depl(deplacement,score,50)
fin

fonction ré_score(score)
debut
score==0
fin */


function score_depl($deplacement,$score,$point){
    
$deplacement=$deplacement+1;
$score=$score+($point/$deplacement);
//une fonctiion retourne un valeur 
return($score);
 
};


function retourscore($score){
    $score =0;
    return($score);
};
 
$deplacement=0;
$score=0;
$deplacement_nom=["Haut","Bas","Droit","Gauche"];

if($deplacement_nom[0]){
    //ne pas oublier de stocker les valeurs
    $score=score_depl($deplacement,$score,25);  
};

if($deplacement_nom[0]){
    //ne pas oublier de stocker les valeurs
    $score=score_depl($deplacement,$score,25);  
};

if($deplacement_nom[2]){
    //ne pas oublier de stocker les valeurs
    $score=score_depl($deplacement,$score,70);
  
};

if($deplacement_nom[3]){
    //ne pas oublier de stocker les valeurs
    $score=score_depl($deplacement,$score,50-25);   
};

if($deplacement_nom[1]){
    //ne pas oublier de stocker les valeurs
    $score=score_depl($deplacement,$score,90-25);  
};

if($deplacement_nom[1]){
    //ne pas oublier de stocker les valeurs
    $score=score_depl($deplacement,$score,90-25);  

    $score=retourscore($score);
};
echo "Le score est de: ".$score;

 
?>
