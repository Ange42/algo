N=3
tab=[]

cle_h=1

cle_b=3

cle_m=2

for i in range(N-1):
    x=tab[i]
    j=i 
    while(j>0 and tab[j-1]>x):
        tab[j-1]=tab[j]
        j=j-1
    tab[j]=x

print(j)

