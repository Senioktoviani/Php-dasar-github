<!DOCTYPE html>
<html>
<head>
    <title>Data SIswa</title>
</head>
<body>
    <center>
    <h3>MENAMPILKAN DATA SISWA<hr></h3><br>
    <form method="POST" action="regis.php">
<table>
             <tr>
                <td></td>
                <td><input type="submit" name="simpan" value='Tambah siswa'></td>
            </tr>
</table>
<?php
if(isset($_POST['simpan'])){
    $nama= $_POST['nama'];
    $jenis= $_POST['jenis'];
    $kelas= $_POST['kelas'];
    $alamat= $_POST['alamat'];

}
?>
<table border="6">
    
    
<tr>
         <td> <?php  echo "Nama <br>";?><td>
      <td><?php  echo "Jenis Kelamin <br>";?></td>
      <td><?php echo "Kelas <br>";?></td>
       <td><?php echo "Alamat <br>";?></td>
 
</tr>
 
<tr>
         <td> <?php  echo "$nama";?><td>
      <td><?php  echo "$jenis";?></td>
      <td><?php echo "$kelas";?></td>
       <td><?php echo "$alamat";?></td>
 
</tr>
</table>
</center>
</body>
</html>