<html>
    <head>
        <title>Hasil pendaftaran hotel</title>
</head>
<body>
   <br>DATA PENDAFTARAN TAMU<hr><br>
    <?php

    if(isset($_POST['simpan'])){

        $tanggal= $_POST['tanggal'];
        $nama= $_POST['nama'];
        $no= $_POST['no'];
        $tipe= $_POST['tipe'];
        $s= 850000;
        $d= 950000;
        $j= 1400000;
        $durasi= $_POST['durasi'];
        $total1= $j*$durasi;
        $total2= $d*$durasi;
        $total3= $s*$durasi;
        $diskon1 = $total1 * (25/100);
        $diskon2 = $total1 * (15/100);
        $diskon11 = $total1 - $diskon1;
        $diskon22 = $total1 - $diskon2;

        $diskon3 = $total2 * (25/100);
        $diskon4 = $total2 * (15/100);
        $diskon33 = $total2 - $diskon3;
        $diskon44 = $total2 - $diskon4;

        $diskon5 = $total3 * (25/100);
        $diskon6 = $total3 * (15/100);
        $diskon55 = $total3 - $diskon5;
        $diskon66 = $total3 - $diskon6;



        {
            echo "Tanggal menginap : $tanggal <br>";
            echo "Nama Tamu : $nama <br>";
            echo "No Identitas : $no <br>";
        }

        if ($tipe == "junior suite"){
            $j=1400000;
            
            echo "Tipe kamar : $tipe <br>";
            echo "Harga : $j <br>";
            echo "Durasi menginap : $durasi <br>";
            echo  "Total harga : $total1 <br>";

            if ($total1 >= 2500000){
            echo "Mendapat diskon 25%  : $diskon1 <br>";
            echo "Total bayar senilai $diskon11 <br> ";
        }else if ($total1 >= 1700000){
            echo "Mendapat diskon 15% : $diskon2 <br>";
            echo "Total bayar senilai $diskon22 <br>";
        }else  {
            echo "Tidak ada diskon!!";
        }

        }else if ($tipe == "deluxe"){
            $d= 950000;

            echo "Tipe kamar : $tipe <br>";
            echo "Harga : $d <br>";
            echo "Durasi menginap : $durasi <br>";
            echo  "Total harga : $total2 <br>";

            if ($total2 >= 2500000){
                echo "Mendapat diskon 25% : $diskon3 <br>";
                echo "Total bayar senilai $diskon33 <br> ";
            }else if ($total2 >= 1700000){
                echo "Mendapat diskon 15% : $diskon4 <br>";
                echo "Total bayar senilai $diskon44 <br>";
            }else  {
                echo "Tidak ada diskon!!";
            }


        }else{
            echo "Tipe kamar : $tipe<br>";
            echo "Harga : $s <br>";
            echo "Durasi menginap : $durasi <br>";
            echo  "Total harga : $total3 <br>";

            if ($total3 >= 2500000){
                echo "Mendapat diskon 25% : $diskon5 <br>";
                echo "Total bayar senilai $diskon55 <br> ";
            }else if ($total3 >= 1700000){
                echo "Mendapat diskon 15% : $diskon6 <br>";
                echo "Total bayar senilai $diskon66 <br>";
            }else  {
                echo "Tidak ada diskon!!";
            }
        }

    }

    ?>
    <form method = "POST" action = "hotel.php">
            <a href="hotel.php">DAFTAR KEMBALI</a> 

</body>
</html>