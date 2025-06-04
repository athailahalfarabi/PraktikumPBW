<?php
  $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

  if(!$koneksi){
    die ("koneksi gagal".mysqli_connect_error());
  }
  $query = "SELECT * FROM mahasiswa";
  $result = mysqli_query($koneksi, $query);

  // ambil data dari sebuah object result

  $mhs = mysqli_fetch_row($result);
  // mysqli_fetch_row() = mengembalikan array numerik
  // mysqli_fetch_assoc() = mengembalikan array associative
  // mysqli_fetch_array() = mengembalikan keduanya
  // mysqli_fetch_object()
  var_dump($mhs -> nama);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data mahasiswa</h1>

    <table border="1px" cellspacing="0" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Joko</td>
            <td>Solo</td>
            <td>
                <a href="edit.php">Edit</a> |
                <a href="hapus.php">Hapus</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>bow</td>
            <td>Jawa</td>
            <td>
                <a href="edit.php">Edit</a> |
                <a href="hapus.php">Hapus</a>
            </td>
        </tr>
    </table>
</body>
</html>