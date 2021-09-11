<?php
$negara = [];
  $negara[]  = 'Indonesia ';
    $negara[] = 'Malaysia';
    $negara[] = 'Singapura';
    $negara[] = 'Thailand ';
    $negara[] = 'Filipina ';

echo "1.Output Array dengan menggunakan perintah PRINTL_R()";
echo '<pre>';
print_r($negara);
echo "<br>";

echo "2.Output Array Assosiatif";
echo"<br><br>";

$negara2 = [
'Indonesia' => 'jakarta',
'Malaysia' => 'Kuala lumpur',
'Singapura' => 'Singapura',
'Thailand' => 'Bangkok',
'Filipina' => 'Manila',
];


foreach ($negara2 as $key => $value){
    echo " <li>  Ibukota $key adalah $value <br>";
    echo "<br>";
}
?>