<?php
//Constant bersifat imutable (Tidak bisa dirubah)
//define adalah constanst atau pendeklarasian variable yang dimana isi variable tidak akan berubah 
//cara pendeklarasian define, diikuti dengan nama variable, kemudian isi variable
define("NAMA", "Aga");
define("UMUR",30);

//mencoba mengganti isi NAMA menjadi budi, tidak berhasil krn NAMA adalah constant
$NAMA = "Budi";
//Gagal merubah isi constant UMUR, karena sifat cosntant adalah pendeklarasian pertama yg disimpan, contoh deklarasi di bawah sengaja saya "comment" karena jika tidak akan error
//define("UMUR",100);
echo NAMA;
echo "\n";
echo UMUR;
?>