<html>
    <head>
        <title>Hasil konser amal</title>
    </head>
    <body>
    <h1>KONSER AMAL ASSALAAM BAHAGIA <hr></h1>
    <br>
        <?php

       if(isset($_POST['simpan'])){
           
        $nama = $_POST['nama'];
        $kode = $_POST['kode'];
        $studio1 = "opick";
        $studio2 = "raihan";
        $jenis = $_POST['jenis'];
        $vip = 500000;
        $festival = 250000;
        $jumlah = $_POST['jumlah'];
        $total1 = $jumlah * $vip;
        $total2 = $jumlah * $festival;

        
        {
            echo "Nama pemesan : $nama <br>";
            echo "Kode studio  : $kode <br>";
        }
        
        if ($studio1 == "opick"){
            echo "Bintang Tamu  : $studio1 <br>";
        }else if($studio2 == "raihan"){
            echo "Bintang Tamu : $studio2 <br>";
        }else{
            echo "Tidak Ada Bintang Tamu! <br>";
        }

        
        
        if($jenis == "vip"){
            $vip = 500000;

            echo "Jenis Kelas  : $jenis <br>";
            echo "Harga  : $vip <br>";
            echo "Jumlah Beli  : $jumlah <br>";
            echo "Total : $total1 <br>";
        }else if ($jenis == "festival"){
            $festival = 250000;

            echo "Jenis Kelas  : $jenis <br>";
            echo "Harga  : $festival <br>";
            echo "Jumlah Beli  : $jumlah <br>";
            echo "Total  : $total2 <br>";
        }
        
    }

        ?>
        
        <form method = "POST" action = "konser.php">
            <a href="konser.php">INPUT KEMBALI</a>
    </body>
</html>
