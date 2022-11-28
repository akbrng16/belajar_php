<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contoh</title>

</head>
<body>
<main>
    <div class="conatiner">
        <h1 class="display-5 fw-bold" style="color: black">Data Berhasil Diupdate</h1>
    </div>
    <div class="d-grid gap-2 d-sm-flex">
    <a href="database.php">
<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baitulquran";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$NamaLengkap = $_POST['Nama Lengkap'];
$TempatTglLahir = $_POST['Tempat Tgl Lahir'];
$Jeniskelamin = $_POST['Jenis Kelamin'];
$Notelp = $_POST['No.telp'];
$Notelportu = $_POST['No.telp ortu'];
$AlamatLengkap = $_POST['Alamat Lengkap'];

$sql="INSERT INTO `tugas` (`Nama Lengkap`, `Tempat Tgl Lahir`, `Jenis Kelamin`, `No.telp`, `No.telp ortu`, `Alamat Lengkap`) VALUES ('$NamaLengkap', '$TempatTglLahir', '$Jeniskelamin', '$Notelp', '$Notelportu', '$AlamatLengkap')";
$result = $conn->query($sql);

  $conn->close();
?>

</body>
</main>
