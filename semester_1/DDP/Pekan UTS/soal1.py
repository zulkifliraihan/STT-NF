def soal_1() :
    
    name = input("Masukkan Nama : ")
    mariage = input("Sudah Menikah (Y/T) : ")

    gapok = 1500000

    if mariage == "Y" or mariage == "y":
        anak = int(input("Jumlah Anak : "))
        tukel = gapok * (20 / 100)
        
        if anak > 2 :
            tunakpersen = 2 * (10/100)
        else :
            tunakpersen = anak * (10/100)
        

        tunak = tunakpersen * gapok

    else :
        tukel = 0
        tunak = 0
    
    
    jutol = gapok + tukel + tunak
    
    print(f'''
Detail Gaji {name} : 
Gaji Pokok    : {gapok}
Tunj Keluarga : {tukel}
Tunj Anak     : {tunak}
Jumlah Total  : {tunak} ''')
    
    question = input("Apakah mau lagi (Y/T) : ")
    
    if question == "Y" :
        soal_1()
    else :
        print("Terima kasih.")

soal_1()