<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM karyawan WHERE Karyawan_ID = '$id'";
    $hapus = mysqli_query($conn,$sql);

    if($hapus){
        echo"<script>
            alert('Data Berhasil Di Hapus')
            window.location = 'index.php?page=data'
        </script>";
        }
        else{
            echo"Data Tidak Berhasil Di Simpan";
    }
?>