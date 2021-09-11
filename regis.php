<!DOCTYPE html>
<html>
<head>
    <title>Data SIswa</title>
</head>
<body>
    <center>
    <h3>Registrasi Siswa Baru</h3><br>
     <form method="POST" action="datasiswa.php">
        <table border="6">
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td><input placeholder= 'Nama Siswa' type='text' name='nama'></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td><input placeholder= 'Jenis Kelamin' type='text' name='jenis'></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input placeholder= 'Kelas' type='text' name='kelas'></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea placeholder= 'Alamat ' name="alamat" cols="18" rows="2"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value='submit'>
                <input type="reset" name="" value='reset'></td>
            </tr>
</table>

<form method = "POST" action = "mulai.php">
            <a href="mulai.php">KEMBALI</a>
</center>
</body>
</html>