<?php
session_start();
include "../koneksi/connect.php";

$user = $_SESSION['NamaUser'];
if ($_SESSION['NamaUser'] == "") {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <script src="../Bootstrap/jquery.min.js"></script>
    <script src="../Bootstrap/bootstrap.min.js"></script>
    <style>
        .row.content {height: 40%}

        .sidenav {
            background-color: #adb5bd;
            height: 100%;
        }

        .sidenav ul.nav li a {
            color: black;
        }
            
        @media screen and (max-width: 767px) {
        .row.content {height: auto;} 
        }
    </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2 style="color: #f8f9fa;"><?php echo $_SESSION['Level'] ; ?></h2>
      <ul class="nav nav-pills nav-stacked">
        <hr class="sidebar-divider">
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="?page=stok">Stock</a></li>
        <li><a href="?page=user">User</a></li>
        <hr class="sidebar-divider">
        <li><a href="../index.php">Customer Page</a></li><br>
        <div style="position: absolute; bottom: 10px, left 10px;">
            <li><a class="btn btn-danger btn-md" href="logout.php">Log Out</a></li>
        </div>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
    <?php
            if (isset($_GET['page'])) {
                $laman = $_GET['page'];

                switch ($laman) {
                    case 'login';
                        include "login.php";
                        break;

                    case 'user':
                        include "user.php";
                        break;

                    case 'stok':
                        include "stok.php";
                        break;

                    case 'logout':
                        include "logout.php";
                        break;
                
                    case 'tambah-barang':
                        include "tambah-barang.php";
                        break;

                    case 'tambah-user';
                        include "tambah-user.php";
                        break;
                    
                    case 'edit-user';
                        include "edit-user.php";
                        break;

                    case 'hapus-user';
                        include "hapus-user.php";
                        break;
                    
                    case 'hapus-produk';
                        include "hapus-produk.php";
                        break;

                    case 'edit-stok';
                        include "edit-stok.php";
                        break;

                    default:
                        
                        break;
                }
            }
            else {
                include "dashboard.php";
            }
        ?>
     </div>
  </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<footer style="background-color: #ADD8E6; color: black; padding: 10px; text-align: center;">
    <p>Copyright &copy; <?php echo date("Y"); ?> Adriel. All Rights Reserved</p>
</footer>
</body>
</html>
</body>
</html>

