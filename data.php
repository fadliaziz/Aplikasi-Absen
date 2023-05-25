<?php
    include"koneksi.php";
    $sql = 'SELECT * FROM karyawan';
    $result = mysqli_query($conn,$sql);
?>

<style>
    tr,th,td{
        text-align: center;
        padding: 2px;
        border: 1px solid black;
        color: black;
        border-radius:5px;
    }

    th{
        background-color:#B799FF;
    }
    table{
        padding: 7px;
    }
    .tambahdata a{
        padding:5px;
        background-color: #B799FF;
        border:1px solid black;
        text-decoration: none;
        color: black;
        border-radius:5px;
    }
    .tambahdata{
        padding: 10px;
        
    }
</style>    
<div class="tambahdata">
    <a href="?page=tambah">Tambah Data</a>
</div>
<table cellspacing = "0" width = "100%">
    <tr>
        <th>No Pengaduan</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php $i = 1;while ($data = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= $data['Nama'] ?></td>
        <td><?= $data['Devisi'] ?></td>
        <td><a href="delete.php?id=<?= $data['Karyawan_ID'] ?>">delete</a></td>
        <td><a href="edit.php?id=<?= $data['Karyawan_ID'] ?>">Edit</a></td>
    </tr>
    <?php }?>
</table>