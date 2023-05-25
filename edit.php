<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM karyawan WHERE Karyawan_ID= '$id'";
    $select = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($select);
?>
<style>
    .form-group input{
        width:100%;
        padding:5px;
    }
</style>
<h3>Form Tambah Data</h3>
<br>
<form action="prosesupdate.php" method="post">
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name ="Nama" value = "<?= $data ['Nama'] ?>">
        <input type="hidden" name="id" value="<?=$data['Karyawan_ID']?>">
    </div>
    <div class="form-group">
        <label for="">Devisi</label>
        <input type="text" name ="Devisi" value = "<?= $data ['Devisi'] ?>">
    </div>
    <div class="form-group">
    <button name = "simpan" type = "submit">Ubah</button>
</div>
</form>