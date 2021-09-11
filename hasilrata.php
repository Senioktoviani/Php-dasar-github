<?php
$n = $_POST['n'];
for ($i=0; $i <= $n - 1; $i++)
{
$bilangan[$i] = $_POST['data'.$i];
}
$jumlah = 0;
for ($i=0; $i <= $n - 1; $i++)
{
$jumlah += $bilangan[$i];
}
$rataRata = $jumlah/$n;
for ($i=0; $i <= $n - 1; $i++)
{
 echo "Bilangan ke-".($i+1)." =".$bilangan[$i]."<br>";
}
echo "<br>Rata-ratanya adalah : ".$rataRata;
?>
