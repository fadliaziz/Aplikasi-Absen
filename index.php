<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aplikasi Bengkel</title>
</head>
<body>
    <div class="header">
        <h2>Selamat Datang Di Aplikasi Absensi</h2>
    </div>
    <di class="content">
        <div class="kiri">
            <div class="card-kiri">
                <h1 style="text-align: center;">Menu</h1>
                <ul>
                    <li><a href="?page=home">Dashboard</a></li>
                    <li><a href="?page=data">Management</a></li>
                </ul>
            </div>
        </div>
        <div class="kanan">
            <div class="card-kanan">
                <?php
                    $page =$_GET['page'];
                    if($page){
                        switch ($page) {
                            case 'home':
                                include"home.php";
                                break;
                            case 'data':
                                include"data.php";
                                break;
                            case 'tambah':
                                include"tambah.php";
                                break;
                            case 'delete':
                                include"delete.php";
                                break;
                            case 'edit':
                                include "edit.php";
                                break;
                            default:
                                break;
                        }
                    }else{
                        echo"halaman Tidak Di Temukan";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Made by Fadli Aziz</p>
    </div>
</body>
</html>