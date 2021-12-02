import sys
from math import sqrt as akar

def soal1() :
    a = int(input("Nilai A :"))
    b = int(input("Nilai B :"))
    c = int(input("Nilai C :"))

    if (a == 0 or a == None):
        sys.exit("A tidak boleh 0")

    d = (b**2) - (4*a*c)

    if d < 0 :
        print ("Fungsi tidak memiliki akar nyata")
    elif d == 0 :
        x1 = (-b / 2*a)
        # x1 = (-b + akar(d))/(2*a)
        
        print("Fungsi hanya memiliki 1 akar tunggal yaitu x = %d" %(x1))

    else :
        x1 = (-b + akar(d))/(2*a)
        x2 = (-b - akar(d))/(2*a)
        print(f'''Memiliki 2 akar yaitu x = {x1} dan x= {x2}''')
        print("Fungsi Kuadratnya adalah y = %dx^2 + %dx + %d" %(a, b, c))


soal1()