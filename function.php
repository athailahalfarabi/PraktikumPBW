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
?>