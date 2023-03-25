// 
 le joueur vas avancé de trois case vers la gauche puis de 3 case vers le haut 

 ce qui donne 

 depart 

 deplacement droit
 deplacement droit
 deplacement droit
 deplacement haut
 deplacement haut
 deplacement haut
 
 fin

 //

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
fin


//
fontion deplacementDepartArrivée(nomJ,est_terminé)
varible
nomJ=""
est_terminé=faux

debut

nomJ="ange"
est_terminé=vrai
 
fin

//

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

//

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

//
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

algo lab

position_dep_X=0
position_dep_Y=0

arrive_x=6
arrive_Y=6

tab[3]

tant que position_dep_X!=arrive_x et position_dep_Y!=arrive_Y et tab.taille!=3:

positionDep(position_x,position_y)

recupClef(position_x,position_y,tab)



fin tant que
//
alog tri
 
variable

tab=[]

pour i allant de 1 à len(tab):

ajoute la valeur de tab[i] dans la variable x 

puis initiale la variable j avec i 

  tant que la variable j >0 et tab[j-1]>x: 
  dire que la tab[j]=tab[j-1] 
  puis ont décremente j de 1 pour comparer les autre element

  fin tant que

après On change la valeur de x avec tab[j] afin de pouvoir changer la place au valeur 
puis on affiche le resultat


