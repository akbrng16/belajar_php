<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="container">
      <h1>Database Pendaftar</h1> 

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Tempat Tgl Lahir</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">No.telp</th>
      <th scope="col">No.telp ortu</th>  
      <th scope="col">Alamat Lengkap</th>    
    </tr>
  </thead>
<?php


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

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
    //   <td><a href=\"http://localhost/nyoba/edit.php?id=" .$row["id"]. "\">edit<a/></td> (masukkan nanti)  
    echo "

    
    <tr>
      <td>" . $row["Nama Lengkap"]. "</td>
      <td>" . $row["Tempat Tgl Lahir"]. "</td>
      <td>" . $row["Jenis Kelamin"]. "</td>
      <td>" . $row["No.telp"]. "</td>
      <td>" . $row["No.telp ortu"]. "</td>
      <td>" . $row["Alamat Lengkap"]. "</td>
    </tr>";


  }
} else {
  echo "0 results";
}
$conn->close();


?>