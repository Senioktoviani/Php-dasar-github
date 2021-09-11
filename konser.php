<!DOCTYPE html>
<html>
<head>
    <title>Program konser amal</title>
</head>
<body>
    <h1>KONSER AMAL ASSALAAM BAHAGIA <hr></h1>
    <form method="POST" action="hasil.php">
        <table>
            <tr>
                <td>Nama Pesanan</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
            </tr>
            <tr>
                <td>Kode Studio</td>
                <td>:</td>
                <td>
                    <select name="kode">
                    <option value="studio1">STUDIO 1</option>
                    <option value="studio2">STUDIO 2</option>      
                    </select><br><br>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelas</td>
                <td>:</td>
                <td><input type="radio" name="jenis" value="vip">VIP
                <input type="radio" name="jenis" value="festival">FESTIVAL</td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value='Tampil'>
                <input type="reset" name="" value='batal'></td>
            </tr>
        </table>
    </form>
</body>
</html>