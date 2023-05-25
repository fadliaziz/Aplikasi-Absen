<?php
    include "koneksi.php";
    $Nama = $_POST['Nama'];
    $Devisi= $_POST['Devisi'];
    $sql = "INSERT INTO karyawan(Nama,Devisi) VALUES ('$Nama','$Devisi')";
    $tambah = mysqli_query($conn,$sql);
    if($tambah){
        echo"<script>
        alert('Data Berhasil Di Tambah')
        window.location ='index.php?page=data'
    </script>";
    }
    else{
        echo"Data Tidak Berhasil Di Simpan";
    }
?>

