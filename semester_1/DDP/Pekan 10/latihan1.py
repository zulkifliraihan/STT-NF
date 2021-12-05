hasil_akhir = [
    {'nama':'Reza', 'nilai':70},
    {'nama':'Ciut', 'nilai':63},
    {'nama':'Dian', 'nilai':80},
    {'nama':'Badu', 'nilai':40}
]
# Start : Latihan 1
def soal1(akhir):
    array = []
    for i in akhir:
        if i['nilai'] > 65:
            array.append(i['nama'])
    print(array)

soal1(hasil_akhir)
# End : Latihan 1