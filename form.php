<!doctype html>
<header>
    <h1>Formulir Pendaftaran
</header>

<?php

// $servername = "sql107.epizy.com";
// $username = "epiz_32958231";
// $password = "RMEb9Ncjmv0";
// $dbname = "epiz_32958231_pendaftaran";

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "baitulquran";


/// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `tugas`"; 
$result = $conn->query($sql);


if ($conn->query($sql) === TRUE) {
  
} else {
  
}
$conn->close();
?>


<?php
echo "<form action=\"http://localhost/belajar_php/update.php\" method=\"POST\">";
$row = $result->fetch_assoc();
?>



    <label>Nama Lengkap</label><br>
    <input type="text" name="Nama Lengkap"  value="<?php echo $row ["Nama Lengkap"] ?>"><br>

    <label>Tempat Tgl Lahir</label><br>
    <input type="text" name="Tempat Tgl Lahir" value="<?php echo $row ["Tempat Tgl Lahir"] ?>"><br> 

    <label>Jenis Kelamin</label><br>
    <input type="text" name="Jenis Kelamin" value="<?php echo $row ["Jenis Kelamin"] ?>"><br>  

    <label>No.telp</label><br>
    <input type="text" name="No.telp" value="<?php echo $row ["No.telp"] ?>"><br> 

    <label></label>No.telp ortu<br>
    <input type="text" name="No.telp ortu" value="<?php echo $row ["No.telp ortu"] ?>"><br>

    <label>Alamat Lengkap</label><br>
    <input type="text" name="Alamat Lengkap" value="<?php echo $row ["Alamat Lengkap"] ?>"><br>

    <input type="submit" value="kirim">
</form>

  