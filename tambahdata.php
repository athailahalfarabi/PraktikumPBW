<?php
    require 'function.php'; 
   
    if(isset($_POST['submit']))
    {
    
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
    <form action=""method="post" enctype="multipart/form-data">
        <label for="nama" style="margin-top: 10px;">Nama : </label>
        <input type="text" name="nama" id="name" placeholder="Nama Lengkap*" required/>
        <label for="kelas">Kelas : </label>
        <input type="text" name="kelas" id="kelas" required/>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan">
        <label for="no_hp">No HP : </label>
        <input type="text" name="no_hp" id="no_hp">
         <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim" required/>
        <label for="foto">Foto : </label>
        <input type="file" name="foto" id="foto" required/>
        <Button type="submit" name="submit">Submit</Button>
    </form>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f8;
        margin: 0;
        padding: 0;
    }
    h1 {
        text-align: center;
        color: #333;
        margin-top: 40px;
    }
    form {
        background: #fff;
        max-width: 400px;
        margin: 30px auto;
        padding: 30px 40px 20px 40px;
        border-radius: 10px;
        box-shadow: 0 4px 16px rgba(0,0,0,0.08);
        display: flex;
        flex-direction: column;
        gap : 15px;
    }
    label {
        font-weight: bold;
        margin-bottom: 5px;
    }
    input[type="text"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    button[type="submit"] {
        padding: 10px 20px;
        background: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    button[type="submit"]:hover {
        background: #45a049;
    }
    </style>

</body>
</html>