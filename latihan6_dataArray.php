<?php
//adalah tipe data yang berisi kumpulan data atau bahkan kosong, tergantung fungsi dan deklarasi di program
//Cara kerja array di php, Index di mulai dari 0, jadi jika ingin mengambil data urutan ke 6, maka index ny adalah 5

//Ada 2 cara untuk mendeklarasikan sebuah array

$bilangan = array(3,5,4,8);
$siswa = ["Budi","Wahyu","Joni"];
$mix = array(2,"Dji",3,"Sam",5,"Soe");
//Untuk menampilkan isi array tidak bisa menggunakan echo, krn echo berfungsi merubah isi variable menjadi string
//echo $bilangan;
//echo "\n";
//echo $siswa;

//Cara yang benar untuk memampilkan isi array menggunakan var_dump

var_dump($bilangan);
var_dump($siswa);
var_dump($mix);

//Dari output selain menampilkan isi array, var_dump juga menampilkan jumlah isi array, dan tipe atau jenis data di tiap2 isi array

//LANJUT operasi array atau memanipulasi data di dalam array , menambah,menghapus, dan melakukan edit

// $array[index] => akan menampilkan isi data array sesuai index yg kita set,contoh kita isi index dengan 2, maka program akan menampilkan urutan data ke 3 (ingat di mulai dari 0)

// $array[index] = value => program akan melakukan edit data pada index yg dimaksud sesuai dengan value yg kita deklarasikan

//$array[] = value => program akan menambahan data baru pada index terakhir

// unset($array[index]) => program akan menghapus data dan index sesuai yg dengan index yg kita tentukan, index yg di hapus akan hilang dan data tidak akan bergeser contoh array 01234, jika kita unset index 2, maka index di array akan menjadi 0134

//count($array) => Program akan menghitung isi atau jumlah data dari array

//Mari kita coba

var_dump($siswa[2]);
$siswa[0] = "Dadang";
var_dump($siswa);



?>