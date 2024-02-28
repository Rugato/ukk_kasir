<?php
include("koneksi/connect.php");
include("Bootstrap/header.php");
?>
<body>

<style>
  .main-content {
    margin-top: 0px;
  }
  .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
  }

  .navbar {
    background-color: #add8e6;
    height: 150px;
    position: relative;
    z-index: 1;
  }

  .navbar-brand {
    font-size: 40px;
  }

  .navbar-nav {
    margin-top: -5px;
  }

</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-primary fixed-top mx-auto">
    <div class="card bg-info container-fluid">
        <i class="navbar-brand" href="#"><span style="color:#468672">All Menus</span></i> 
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn" href="transaksi.php"> + Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn" href="Petugas/login.php"><span style="color: #fc007e;">!Admin!</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<div class="main-content">
    <div class="card-container">
        <?php
        $sql = $conn->query("SELECT * FROM produk");
        while ($data= $sql->fetch_assoc()) {
            ?>
            <div class='card' style='width: 18rem; margin: 10px;'>
            
                <?php echo "<img class='card-img-top' src='foto/" . $data['Foto'] . "' width='230' height='250'>" ?>
                <div class='card-body'>
                    <h5 class='card-title'><?php echo $data['NamaProduk']?></h5>
                    <p class='card-text'>Harga : Rp.<?php echo number_format($data['Harga']) ?>;</p>
                    <p class='card-text'>Stok Tersedia : <?php echo $data['Stok']?></p>
                    <a href='transaksi.php' class='btn btn-md btn-primary float-end'>Beli</a>
                </div>
            
            </div>

            <?php
        }
        ?>
    </div>
</div>

</body>
</html>
