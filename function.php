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

        $query = "INSERT INTO mahasiswa ( foto, nama, kelas, jurusan, no_hp, nim) VALUES ('', '$nama', '$kelas', '$jurusan','$no_hp','$nim')";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
        
    }

    function hapusdata($id)
    {
        global $koneksi;
        $query = "DELETE FROM mahasiswa WHERE id = $id";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
?>