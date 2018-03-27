# Tugas-Proweb_4
Algoritma login 3 kali salah passwoord

1.	Start
2.	Masukkan username dan password
3.	Klik tombol Login
4.	Jika user name dan password benar,maka akan masuk ke halaman selanjutnya
5.	Jika salah keluar peringatan
6.	Jika salah sebanyak 3 kali maka akan di blokir
7.	Jika tidak mengisi username atau password akan muncul dialog peringatan 
8.	End

Pseducode

SESSION[‘salah’], user,pass=0
Jika <user=user && pass=pass>==TRUE
Maka berhasil login dan masuk ke halaman selanjutnya 
Jika FALSE
Maka melakukan proses increment pada SESSION [‘salah’]+1
Jika SESSION[‘salah’]>=3==TRUE
Maka akan melakukan proses blokir dan muncul pesan sudah terblokir
Jika FALSE kembali ke awal 

![ss](https://github.com/Hevi12/Tugas-Proweb_4/blob/master/flowchartnew.jpg)
![ss](https://github.com/Hevi12/Tugas-Proweb_4/blob/master/1.PNG)
![ss](https://github.com/Hevi12/Tugas-Proweb_4/blob/master/2.PNG)
![ss](https://github.com/Hevi12/Tugas-Proweb_4/blob/master/3.PNG)
![ss](https://github.com/Hevi12/Tugas-Proweb_4/blob/master/4.PNG)

