<!DOCTYPE html>
<html>
<head>
    <title>Hotel *****</title>
</head>
<body>
    <h2>Pendaftaran Tamu Hotel</h2><hr><br>
    <form method="POST" action="data.php">
        <table>
            <tr>
                <td>Tanggal Menginap</td>
                <td>:</td>
                <td><input type='text' name='tanggal'></td>
            </tr>
            <tr>
                <td>Nama Tamu</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
            </tr>
            <tr>
                <td>No Identitas</td>
                <td>:</td>
                <td><input type='text' name='no'></td>
            </tr>
            <tr>
                <td>Tipe Kamar</td>
                <td>:</td>
                <td><input type="radio" name="tipe" value="superior">Superior
                <input type="radio" name="tipe" value="deluxe">Deluxe
                <input type="radio" name="tipe" value="junior suite">Junior Suite</td>
            </tr>
            <tr>
                <td>Durasi Menginap</td>
                <td>:</td>
                <td><input type='text' name='durasi'></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value='daftar'></td>
            </tr>
        </table>

</body>
</html>