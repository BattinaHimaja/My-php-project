https://onlinegdb.com/EoJybRb5K

d={"a":"ab","b":"cd","c":"cd","d":"ab"}
l=["a"]
n=7
u="a"
t=""
while(len(u)<=n):
    for i in l[-1]:
        t+=d[i]
    l.append(t)
    u+=t  
    t=""
l.append(t)
for i in l:
    print(i)
print(u)
print(u[6])
