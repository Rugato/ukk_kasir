<h2>User Kasir</h2>
<br>
<?php if ($_SESSION['Level'] == "Admin") {   }?>
<a class="btn btn-success btn-md" href="?page=tambah-user">Tambah User</a>
</br>
<table class="table table-striped table-bordered">
    <br>
    <thead>
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
        <?php if ($_SESSION['Level'] == "Admin") { ?>
            <th>Pilihan</th>
            <?php } ?>
            </tr>
        </thead>
        <tbody>
        <?php 
            include '../koneksi/connect.php';
            $no = 1;
            $sql = $conn->query("SELECT * FROM user");
            while ($data= $sql->fetch_assoc()) {
                  
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['NamaUser']; ?></td>
            <td><?php echo $data['Password']; ?></td>
            <td><?php echo $data['Level']; ?></td>
                <?php if ($_SESSION['Level'] == "Admin") { ?>
                <td><a type='button' href='?page=edit-user&UserID=<?= $data['UserID']; ?>' class='btn btn-sm btn-warning'>Edit</a> | <a type='button' href='?page=hapus-user&UserID=<?= $data['UserID']; ?>' class='btn btn-sm btn-danger'>Delete</a></td>
            <?php } ?>
        </tr>
    <?php } ?>
</tbody>
</table>
    