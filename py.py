import math
 

def countDivisors(n) :
    cnt = 0
    for i in range(1, (int)(math.sqrt(n)) + 1) :
        if (n % i == 0) :
             
            
            if (n / i == i) :
                cnt = cnt + 1
            else : 
                cnt = cnt + 2
                 
    return cnt
n=int(input())
l=list(map(int,input().split(" ")))
s=[]

for i in range(0,len(l)):
    t=0
    d=countDivisors(l[i])
    t=l[i]+sum(l[i+d+1::])
    s.append(t)
print(max(s))
    
    
    