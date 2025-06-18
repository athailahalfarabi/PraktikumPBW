<?php

  require 'function.php';

  $query = "SELECT * FROM mahasiswa";
  
  $rows = query($query); 

//   // ambil data dari sebuah object result
//   $rows = [];
//   while ($row = mysqli_fetch_assoc($result)) {
//   var_dump($row);
//   }
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
    <a href="Tambahdata.php"><Button style =
    "background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;">Tambah data</Button></a>
    <table border="1px" cellspacing="0" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>foto</th>
            <th>Nama</th>
            <th>kelas</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>No.Hp</th>
            <th>Aksi</th>
        </tr>
        <?php
        $i= 1;
        foreach ($rows as $mhs) { ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="images/<?= $mhs["foto"] ?>" width="60px"></td>
            <td><?= $mhs["nama"] ?></td>
            <td><?= $mhs["kelas"] ?></td>
            <td><?= $mhs["nim"] ?></td>
            <td><?= $mhs["jurusan"] ?></td>
            <td><?= $mhs["no_hp"] ?></td>
            <td><a href="hapus.php/?id=<?= $mhs["id"] ?>"><button style="background-color: red;">hapus</button></a></td>
        </tr>
         <?php $i++; } ?>
    </table>
</body>
</html>