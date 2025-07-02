<?php
    $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

  if(!$koneksi){
    die ("koneksi gagal".mysqli_connect_error());

    }
    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambahmahasiswa($data)
    {
        global $koneksi;
        $nama = $data['nama'];
        $kelas = $data['kelas'];
        $nim = $data['nim'];
        $jurusan = $data['jurusan'];
        $no_hp = $data['no_hp'];
        

        $cek = mysqli_query($koneksi, "SELECT nim FROM mahasiswa WHERE nim = '$nim'");
        if(mysqli_num_rows($cek) > 0) {
            echo "<script>alert('NIM sudah terdaftar!');window.location='tambahdata.php';</script>";
            exit;
        }
        
        $file = $_FILES['foto']['name'];
        $namafile = date('day_his') . '_' . $file;
        $tmp = $_FILES['foto']['tmp_name'];
        $folder = 'images/';
        $path = $folder . $namafile;

        if (move_uploaded_file($tmp, $path)) {
    

        $query = "INSERT INTO mahasiswa ( foto, nama, kelas, jurusan, no_hp, nim) VALUES ('$namafile', '$nama', '$kelas', '$jurusan','$no_hp','$nim')";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);

        }

        
        
    }

    function hapusdata($id)
    {
        global $koneksi;
        $query = "DELETE FROM mahasiswa WHERE id = $id";
        mysqli_query($koneksi, $query);


        return mysqli_affected_rows($koneksi);
    }

    function ubahdata($data, $id)
    {
        global $koneksi;
        
        $nama = $data['nama'];
        $kelas = $data['kelas'];
        $nim = $data['nim'];
        $jurusan = $data['jurusan'];
        $no_hp = $data['no_hp'];

        if ($_FILES['foto']['error'] === 4) {
            // Jika tidak ada foto yang diupload, gunakan foto lama
            $foto = query("SELECT foto FROM mahasiswa WHERE id = $id")[0]['foto'];
        } else {
            // Jika ada foto baru yang diupload
            $file = $_FILES['foto']['name'];
            $namafile = date('Ymd_his') . '_' . $file;
            $tmp = $_FILES['foto']['tmp_name'];
            $folder = 'images/';
            $path = $folder . $namafile;
        
            if (move_uploaded_file($tmp, $path)) {
               
        }
    }
            $query = "UPDATE mahasiswa SET 
            foto = '$namafile',
            nama = '$nama',
            kelas = '$kelas',
            jurusan = '$jurusan',
            no_hp = '$no_hp',
            nim = '$nim'
            WHERE id = $id";
            mysqli_query($koneksi, $query);
        // Update data mahasiswa
            
        

        return mysqli_affected_rows($koneksi);
    }
?>