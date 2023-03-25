<?php
/*
alog tri
 
variable

tab=[]

pour i allant de 1 à len(tab):

ajoute la valeur de tab[i] dans la variable a

puis initiale la variable j avec i 

  tant que la variable j >0 et tab[j-1]>a: 
  dire que la tab[j]=tab[j-1] 
  puis ont décremente j de 1 pour comparer les autre element

  fin tant que

après On change la valeur de a avec tab[j] afin de pouvoir changer la place au valeur 
puis on affiche le resultat

*/
$tab=[3,2,5,1];
for($i=0;$i<=length.$tab;$i++)
     $a=$tab[$i];
     $j=$i;
     while($j>0 && $tab[$j-1]>$a){
        $tab[$j-1]=$tab[$j];
        $j=$j-1;
     }
$tab[$j]=$a;
echo $tab;
?>