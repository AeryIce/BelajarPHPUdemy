<?php
//NULL adalah tipedata tanpa nilai

//Awal pendeklarasian variable nama akan berisi Aga
$nama = "Aga";
//kemudian kita deklarasikan lagi variable nama dengan NULL, maka output dari variable nama adalah NULL atau kosong
//untuk mengubah isi variable nama menjadi null makan aktifkan baris perintah di bawah yg saya komen
//$nama = NULL;
$umur = 20;
$alamat = NULL;
echo  "Nama:";
echo $nama;
echo "\n";
echo "Alamat:";
echo "\n";
echo "Umur:";
echo $umur;
echo "\n";

//Untuk melihat isi variable NULL atau tidak bisa menggunakan Perintah is_null

echo("Apakah Variable nama null? :");
echo is_null($nama);
echo "\n";
echo ("Apakah Variable alamat null?:");
echo is_null($alamat);
echo "\n";
echo "\n";

//Jika hasil is_null adalah 1 artinya true, atau memang benar variable tersebut null atau kosong
//bisa juga dibantu dengan perintah var_dump
// Jika menggunakan var_dump akan terlihat false atau true ketika dilakukan fungsi is_null
echo("Apakah Variable nama null? :");
var_dump(is_null($nama));
echo ("Apakah Variable alamat null?:");
var_dump(is_null($alamat));
echo "\n";

//Untuk menghapus variable bisa menggunakan perintah unset
$contoh = "Ini Contoh";
unset($contoh);

echo $contoh;
//Ketika di jalankan, dan ingin menampilkan isi variable contoh maka program akan error, karena variable contoh telah dihapus

//Untuk melihat ada atau tidaknya variable bisa digunakan perintah isset

$warna = "Biru";
$nomor = NULL;

var_dump(isset($warna));
var_dump(isset($nomor));
var_dump(isset($adatidak));

//Jika dilihat dari fungsinya, jika variable ada dan tidak NULL isset akan mengembalikan nilai TRUE
//Jika variable ada tapi NULL, isset akan mengembalikan nilai FALSE
//Jika variable tidak ada, maka isset juga akan mengembalikan nilai FALSE 

//KESIMPULAN : jika yakin variable yg akan di cek itu ada(terlihat oleh mata), bisa menggunakan is_null , tapi kl tidak yakin gunakan isset

?>