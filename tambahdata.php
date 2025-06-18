<?php
    require 'function.php'; 
   
    if(isset($_POST['submit']))
    {
        tambahmahasiswa($_POST);
        
        

    
       if (tambahmahasiswa($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil disimpan');
            document.location.href = 'datamahasiswa.php';
        </script>";
       } else {
            echo "
        <script>
        alert('Data gagal disimpan');
        document.location.href = 'datamahasiswa.php';
        </script>";
       }
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action=""method="post">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="name" placeholder="Nama Lengkap*" required/>
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" id="kelas" required/>
        <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim" required/>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan">
        <label for="no_hp">No HP : </label>
        <input type="text" name="no_hp" id="no_hp">
        <Button type="submit" name="submit">Submit</Button>
    </form>
</body>
</html>