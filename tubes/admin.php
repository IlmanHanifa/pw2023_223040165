<?php
require 'function.php';
$user = query("SELECT * FROM datalogin");


?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Daftar User</h1>

    <a href="tambah.php">Tambah data user</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>

    </form>

    <br>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($user as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                </td>
                <td><?= $row["username"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["password"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>

</html>