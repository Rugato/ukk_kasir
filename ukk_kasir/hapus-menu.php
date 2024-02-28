<?php
include_once("koneksi/connect.php");
$id = $_GET['id'];
$sql = $conn->query("DELETE FROM detailpenjualan WHERE PenjualanID=$id");
echo "<script>
        alert('Menu berhasil dihapus');
        window.location.href = 'index.php';
    </script>";
?>