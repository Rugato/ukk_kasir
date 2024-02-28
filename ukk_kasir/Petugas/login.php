<?php
include "../koneksi/connect.php";

error_reporting(0);
session_start();

// Pengecekan apakah pengguna sudah login
if(isset($_SESSION['NamaUser'])) {
    header("Location: index.php"); // Redirect ke halaman index.php jika sudah login
    exit;
}

if (isset($_POST['submit'])) {
  $NamaUser = $_POST['NamaUser'];
  $Password = md5($_POST['Password']);

  $sql = "SELECT * FROM user WHERE NamaUser='$NamaUser'";
  $result = mysqli_query($conn, $sql);

  if ($result->num_rows > 0) {
      $row = mysqli_fetch_assoc($result);
      if (md5($_POST['Password']) === $row['Password']) {
          $_SESSION['Level'] = $row['Level'];
          $_SESSION['NamaUser'] = $row['NamaUser'];
          header("Location: index.php");
          exit;
      } else {
          // Password salah
          echo "<script>alert('Wrong Password. Try again!')</script>";
      }
  } else {
      // Username tidak ditemukan
      echo "<script>alert('Username not found!')</script>";
  }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login User</title>
    <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('../foto/McLaren\ 765lt\ 1.1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            position: relative;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .container {
            position: relative;
            z-index: 1;
            margin-top: -200px;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body>
<div class="overlay"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card text-black">
                <div class="card-header">
                    <form action="" class="form-signin" method="post"> 
                        <center><h3 class="">Login</h3></center>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-4 mt-4">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" name="NamaUser" class="form-control" placeholder="Type Here..." required autofocus>
                                </div>
                                <div class="mb-4 mt-4">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" name="Password" class="form-control" placeholder="Type Here..." required autofocus>
                                </div>
                                <button name="submit" class="btn btn-success">Login</button>
                                <a href="../index.php" class="btn btn-primary">Customer Page</a>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../Bootstrap/jquery.min.js"></script>
<script src="../Bootstrap/bootstrap.min.js"></script>
</body>
</html>
