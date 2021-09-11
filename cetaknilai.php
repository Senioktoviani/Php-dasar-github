<html>
<head>
<title>Rapot</title>
</head>
<body><center>
    <h3>Form Cetak Nilai Siswa <br>
        SMK ASSALAAM BANDUNG <br>
        Tahun 2021/2021</h3>

        <style>
                table, th, tr{
                    background: rgb(252, 205, 103);
                }
                 input{
                    background: rgb(252, 164, 130);
                }
                th{
                   background: rgb(252, 164, 130);
                }
                body{
                    background: rgb(158, 203, 245);
                }
            </style>

<table border=1 frame='vold' width='400'><tr><td>
<form method="POST" action="hasilnilai.php">
    <br>
    <table width=100%>
    <tr> <td>Nama</td>
    <td>:<input type="text" name='nama'></td>
    </tr>
    <tr>
    <td>NIS</td>
    <td>:<input size=20 type="text" name='nis'></td>
    </tr>
    </table>
    <br>
    <table border=1>
    <tr>
    <td align=center>No</td>
    <td align=center width=100%>Mata Pelajaran</td>
    <td align=center>Nilai</td>
    </tr>
    <tr>
    <td alignt=center>1</td>
    <td>Pendidikan Agama Islam</td>
    <td><input size=1 type="text" name="pai"></td>
    </tr>
    <tr>
    <td alignt=center>2</td>
    <td>PPKN</td>
    <td><input size=1 type="text" name="ppkn"></td>
    </tr>
    <tr>
    <td alignt=center>3</td>
    <td>Bahasa Indonesia</td>
    <td><input size=1 type="text" name="indo"></td>
    </tr>
    <tr>
    <td alignt=center>4</td>
    <td>Matematika</td>
    <td><input size=1 type="text" name="mtk"></td>
    </tr>
    <tr>
    <td alignt=center>5</td>
    <td>Bahasa Inggris</td>
    <td><input size=1 type="text" name="inggris"></td>
    </tr>
    <tr>
    <td alignt=center>6</td>
    <td>Produk Kreatif dan Kewirausahaan</td>
    <td><input size=1 type="text" name="kwu"></td>
    </tr>
    <tr>
    <td alignt=center>7</td>
    <td>Al-Quran</td>
    <td><input size=1 type="text" name="al"></td>
    </tr>
    <tr>
    <td alignt=center>8</td>
    <td>Bimbingan Konseling</td>
    <td><input size=1 type="text" name="bk"></td>
    </tr>
    <tr>
    <td alignt=center>9</td>
    <td>Produktif RPL</td>
    <td><input size=1 type="text" name="rpl"></td>
    </tr>
    <tr>
    <td alignt=center>10</td>
    <td>Produktif TKJ</td>
    <td><input size=1 type="text" name="tkj"></td>
    </tr>
    </table>
    <br>
    <center><input type="submit" name="kirim" value="CETAK NILAI">
</form>
</td><tr></table>
</html>