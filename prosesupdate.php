<?php
    include "koneksi.php";
    $nama =$_POST['Nama'];
    $devisi =$_POST['Devisi'];
    $id = $_POST['id'];
    $sql = "UPDATE Karyawan SET Nama = '$nama',Devisi = '$devisi' WHERE Karyawan_ID='$id'";
    $update = mysqli_query($conn,$sql);
    if($update){
        echo"<script>
        alert('Data Berhasil Di di Ubah')
        window.location = 'index.php?page=data'
    </script>";
    }
?>