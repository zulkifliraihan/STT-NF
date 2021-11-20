def soal_1() :
    val = int(input("Masukin Berapa Hasil Print : ")) # value for print
    s = 0 # for spaces
    for i in range(0, val):
        for j in range(0, s):
            print(' ', end='')
        
        s += 2
        for j in range(0, val):
            print('* ' , end='')
        
        val -= 1
        print('')

def soal_2() :
    val = int(input("Masukin Berapa Hasil Print : ")) # value for print
    s = 0 # for spaces
    for i in range(0, val):
        for j in range(0, s):
            print(' ', end='')

        s += 2
        for j in range(0, val):
            print('* ' , end='')
        val -= 2
        print('')

def soal_3() :
    val = int(input("Masukin Berapa Hasil Print : ")) # value for print
    s = 0 # for spaces
    for i in range(0, val):
        for j in range(0, s):
            print(' ', end='')

        s += 5
        for j in range(0, val):
            print('  *  ' , end='')
        val -= 2
        print('')

def soal_4() :
    early = 0
    end = 10
    
    for i in range(end):
        early += 1
        print(early)
        early += 1
        # early += 1
        # print(i)
        
# soal_1()
# soal_2()
# soal_3()
soal_4()