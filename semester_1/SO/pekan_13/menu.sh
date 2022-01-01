#1/bin/bash
#Program menu cek kondisi komputer
while [ "$jawaban" != "4" ]; do
 clear
 echo Pilihan angka menu:
 echo 1. Cek kondisi memori
 echo 2. Cek kondisi hardisk
 echo 3. Cek kondisi antarmuka jaringan
 echo 4. Selesai
 read -p "Pilihan anda? " jawaban
 if [ "$jawaban" = "1" ]; then
  clear
  free -h
 elif [ "$jawaban" = "2" ]; then
  clear
  df
 elif [ "$jawaban" = "3" ]; then
  clear
  ifconfig
 elif [ "$jawaban" = "4" ]; then
  echo Terima kasih
 else
  echo Jawaban anda tidak ada dalam pilihan
 fi
 echo
 read -p "Silakan tekan sembarang tombol" tombol
done