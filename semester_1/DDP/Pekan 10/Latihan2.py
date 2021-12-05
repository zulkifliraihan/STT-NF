fruits = ['pepaya', 'mangga', 'pisang', 'durian', 'jambu']
array = []

# Start : Latihan 1 
def soal1(fruits):
    reverseFruits = fruits[::-1]
    print(reverseFruits)

soal1(fruits)
# End : Latihan 1 

# Start : Latihan 2
def soal2(fruits):
    for item in fruits:
        for i in range(2):
            array.append(item)
    print(array)

soal2(fruits)
# End : Latihan 2

# Start : Latihan 3
name = "Nurul Fikri"
vowal = ["a", "i", "u", "e", "o", " "]

def soal3(name):
    for n in name:
        if n in vowal:
            name = name.replace(n, "")
    print(name)
soal3(name)
# End : Latihan 3
