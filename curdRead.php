<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'modularitasCurdRead.php';

$rows = query("SELECT * FROM db_mahasiswa");

if (isset($_POST["cari"])) {
    $keyword = $_POST["keyword"];

    $rows = cari($keyword);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>DATA MAHASISWA</h2>
    <a href="curdCreate.php">Tambah data</a>
    <br><br>
    <a href="logout.php">Logout</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" id="keyword" autofocus placeholder="masukan kata kunci">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <table border="1" cellpadding=10 cellspacing=0>
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </thead>

        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td> <?php echo $i ?> </td>
                    <td> <?php echo $row["nim"] ?> </td>
                    <td> <?php echo $row["nama"] ?> </td>
                    <td> <?php echo $row["email"] ?> </td>
                    <td> <?php echo $row["jurusan"] ?> </td>
                    <td>
                        <a href="curdUpdate.php?id= <?php echo $row["id"] ?>"> ubah | </a>
                        <a href="curdDelete.php?id= <?php echo $row["id"] ?>" onclick="return confirm('Apakah anda yakin menghapus data?')"> hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>