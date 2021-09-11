<html>
<head>
<title>Hasil Nilai Rapot</title>
</head>
<body>
<center><h3>Hasil Cetak Nilai Siswa<br>
    SMK ASSALAAM BANDUNG <br>
    Tahun 2021/2021</h3><hr><br>
    <table border=1 frame=void width=500%><tr><tr>
    <br>
<style>
                table{
                    background: rgb(252, 164, 130);
                }
                body{
                    background: rgb(248, 102, 92); 
                }
            </style>
            
    

<?php
if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $pai = $_POST['pai'];
    $ppkn = $_POST['ppkn'];
    $indo = $_POST['indo'];
    $mtk = $_POST['mtk'];
    $inggris = $_POST['inggris'];
    $kwu = $_POST['kwu'];
    $al = $_POST['al'];
    $bk = $_POST['bk'];
    $rpl = $_POST['rpl'];
    $tkj = $_POST['tkj'];

    $nilai = [
        'Pendidikan Agama Islam' => $pai,
        'PPKN' => $ppkn,
        'Bahasa Indonesia' => $indo,
        'Matematika' => $mtk,
        'Bahasa Inggris' => $inggris,
        'Produk Kreatif dan Kewirausahaan' => $kwu,
        'Al-Quran' => $al,
        'Bimbingan Konseling' => $bk, 
        'Produktif RPL' => $rpl,
        'Produktif TKJ' => $tkj 
    ];

    echo "
    
    <table>
    <tr>
    <td>Nama</td>
    <td>: $nama</td>
    </tr>
    <tr>
    <td>NIS</td>
    <td>: $nis</td>
    </tr>
    </table>
    <br>
    <table border=1 width=310px>
    <tr>
    <td align=center>No</td>
    <td align=center width=200%>Mata Pelajaran</td>
    <td align=center>Nilai</td>
    </tr>

";

$i = 1;
$total = 0;
$grade="";
foreach ($nilai as $key => $value){
    if ($value > 85 && $value <= 100){
        $grade = "A";
        $total = $total + 4;
    }elseif ($value > 70 && $value <= 85){
        $grade = "B";
        $total = $total + 3;
    }elseif ($value > 60 && $value <= 70){
        $grade = "C";
        $total = $total + 2;
    }elseif ($value > 40 && $value <= 60){
        $grade = "D";
        $total = $total + 1;
    }elseif ($value > 0 && $value <= 40){
        $grade = "E";
        $total = $total + 0;
    }

    echo "
    <tr>
    <td >$i</td>
    <td>$key</td>
    <td>$grade</td>
    </tr>
    ";

    $i++;
}
echo"
</table><br>
<center><b>Nilai Rata-ratanya Adalah: ".($total/10)."
";
}
?>
</body>
</html>