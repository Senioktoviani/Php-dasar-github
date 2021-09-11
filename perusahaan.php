<?php
$perusahaan = [
    'nama' => 'Seni Oktoviani',
    'umur' => '17 tahun',
    'Alamat' => 'Kp.Sindang Palay',
    'Hobi' => ['Mendengarkan musik' , 'Berenang'],
    'Media Sosial' => ['Instagram' => 'Senioktvnii_', 'facebook' => 'Seni oktoviani']
];

echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Pemamnggilan Array 2 Dimensi"."<br>";
echo $perusahaan['Hobi'][1]."<br>";
echo $perusahaan['Media Sosial']['Instagram'];
?>