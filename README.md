#arcademy_test

<h1> SOAL 1 </h1>

<pre>
Buatlah sebuah method/function untuk me-return biodata Anda, dengan ketentuan
  - name(string)
	- address (String)
	- hobbies (Array)
	- is_married (Boolean)
	- school (Obj) with key highSchool, and university
	- skills (Array of Obj)
	- Return value harus berformat JSON!
</pre>

run menggunakan php cli, output : 

<pre><strong>$</strong> php soal1.php</br> 
{"nama":"Muhammad Sholeh","alamat":"Kabupaten Siwa, Sulawesi Selatan","hobby":["Nonton","Membaca","Berpikir"],"merit":false,"school":{"HighScool":"SMAN 1 SAWERIGADI","University":"HALU OLEO UNIVERSITY"},"skill":[{"Manajemen":"Sedang","Disiplin":"Sedang"},{"Desain":["Photoshop","Inkscape"],"Programming":["PHP","Java"]}]}
</pre>

<h4>Kegunaan JSON pada RESTAPI yaitu untuk memudahkan restAPI dalam memberikan data response kepada client yang berkomunikasi dengan RESTAPI itu sendiri</h4>

<h1> SOAL 2 </h1>

<pre>
Pada sebuah form, terdapat 3 buah field  yaitu: username, dan password.
Buatlah function untuk memvalidasi field-field tersebut, dengan requirement sebagai berikut:
Username, merupakan kombinasi dari huruf kecil. Dengan panjang tepat 8 karakter.
Password, merupakan kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang minimal 8 karakter.
Clue:
Peserta hanya diminta membuat function validasi, tidak perlu membuat form HTML.
examples:
is_username_valid(‘zeronull’)
				Return true
is_username_valid(‘useroke’)
				Return false
is_password_valid(‘qazW_123’)
Return true
</pre>

run menggunakan php cli, output : 

<pre><strong>$</strong> php soal2.php </br>
input username : testtest</br>
password : 123456789</br>
Fail Weak Password</br>
<strong>$</strong> php soal2.php</br>
input username : testtest</br>
password : 12QWEew@@12</br>
Success!! You Have strong password</br>
<strong>$</strong> php soal2.php </br>
input username : test</br>
password : 12we</br>
Username or password must be 8 character</br>
<strong>$</strong> php soal2.php </br>
input username :</br> 
password : </br>
username or password cannt be null</br>
</pre>

<h1>SOAL 3</h1>

<pre> 
Buatlah function untuk mencetak gambar seperti dibawah ini, yang mempunyai sebuah parameter sebagai panjang lebar/tinggi gambar. Parameter harus merupakan bilangan ganjil:
Misalnya jika dijalankan:
cetak_gambar(5);
Makan akan dihasilkan:
* = = = * 
* = = = * 
* * * * * 
* = = = * 
* = = = *
</pre>

run menggunakan php cli, output :

<strong>$</strong> php soal3.php 
input username : 9
<pre>* = = = = = = = * 
* = = = = = = = * 
* = = = = = = = * 
* = = = = = = = * 
* * * * * * * * * 
* = = = = = = = * 
* = = = = = = = * 
* = = = = = = = * 
* = = = = = = = * 
</pre>

<h1>Soal 6</h1>

<pre>
Membuat aplikasi quick count:
Requirements aplikasi:
Menampilkan list kandidat dari database (nama dan earned_vote) beserta tombol tambah.
Jika tombol tambah di tekan maka perolehan suara (db:earned_vote) calon kandidat akan terupdate bertambah, dan tampilan “Perolehan suara” akan berubah sesuai database.
Wajib menggunakan HTML, CSS, dan twitter bootstrap untuk tampilan, diusahakan responsive untuk tampilan handphone. Bahasa pemrograman bebas.
</pre>

link demo app : https://youtu.be/bHXBb3eVXgg


<h1>SOAL 5</h1>

<pre>
Buatlah function yang mempunyai sebuah parameter, fungsi tersebut mempunyai tugas untuk  mencetak string acak sepanjang 32 karakter sebanyak jumlah parameter.
Pada function tersebut buatlah pengecekan untuk memastikan tidak ada string(data) yang sama.
Clue:
Function dijalankan:
cetak(3);
Akan dicetak di layar
da2c312dfe804ef5bd318133a342251a
79n89a9mdfe804ef5b18133a342251o
6e576057da174c4189f7ea8341946aed
</pre>

output : 

<pre>
<strong>$</strong> php soal5.php
input jumlah output : 5
Array
(
    [0] => 210f760a89db30aa72ca258a3483cc7f
    [1] => 8e296a067a37563370ded05f5a3bf3ec
    [2] => b7ee6f5f9aa5cd17ca1aea43ce848496
    [3] => 69cb3ea317a32c4e6143e665fdb20b14
    [4] => eefc9e10ebdc4a2333b42b2dbb8f27b6
)
</pre>

<h1>SOAL 4</h1>

<pre>
Buatlah sebuah function memiliki sebuah parameter berupa array yang berisi array yang berisi abjad, yang mempunyai tugas untuk mengurutkan array terpendek ke terpanjang, dan juga mengurutkan abjad di dalamnya dari a ke z. Dilarang menggunakan built in function array_multisort
misalnya :
var data = [
[‘a’,’c’,’b’,’e’,’d’],
[‘g’,’e’,’f’]
]
Jika function dijalankan:
sort_array(data);
Akan ditampilkan:
[
	[‘e’,’f’,’g’],
[‘a’,’b’,’c’,’d’,’e’]
]

=====

var datalain = [
[‘g’,’h’,’i’,’j’],
[‘a’,’c’,’b’,’e’,’d’],
[‘g’,’e’,’f’]
]
Jika function dijalankan:
sort_array(datalain);
Akan ditampilkan:
[
	[‘e’,’f’,’g’],
             [‘g’,’h’,’i’,’j’],
[‘a’,’b’,’c’,’d’,’e’]
]

</pre>

Output : 

<pre>
<strong>$</strong> php soal4.php
input jml array : 3
input susunan array ke 0 : rtw
input susunan array ke 1 : af
input susunan array ke 2 : gfdg
Array
(
    [0] => Array
        (
            [0] => a
            [1] => f
        )

    [1] => Array
        (
            [0] => r
            [1] => t
            [2] => w
        )

    [2] => Array
        (
            [0] => d
            [1] => f
            [2] => g
            [3] => g
        )

)
</pre>
