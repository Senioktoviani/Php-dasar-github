<?php

$jurusan = array ('Teknik Informatika', 'Sistem Informasi', 'Teknik Komputer', 'Manajemen Informatika');

echo  "1.Contoh Program Array Numeric <br>";

$jurusan_jumlah = count($jurusan);
for ($i=0; $i < $jurusan_jumlah; $i++){
    echo " Jurusan $jurusan[$i] - Ada di index $i";
    echo "<br>";
}

echo "<br>";
echo "2.Contoh Program Array Assosiatif <br>";

foreach ($jurusan as $key => $value){
    echo " Kata Kunci Index =  jurusan$key, Nilai = $value";
    echo "<br>";
}
?>