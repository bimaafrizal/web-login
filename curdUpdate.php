<?php

require 'modularitasCurdUpdate.php';

$id = $_GET["id"];
$rows = query("SELECT * FROM db_mahasiswa WHERE id = $id");

if(isset($_POST["submit"])) {
    if(ubah($_POST) > 0 ) {
        echo "
        <SCRIPt>
            alert('Data berhasil diubah');
            document.location.href = 'curdRead.php';
        </SCRIPt>
        ";
    }
    else {
        echo "
        <SCRIPt>
            alert('Data gagal diubah');
            document.location.href = 'curdRead.php';
        </SCRIPt>
        ";
    }
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
    <h1>Form Ubah Data Mahasiswa</h1>
    <form action="" method="post">
    
        <?php foreach ($rows as $row) : ?>
            <table>
            <input type="hidden" name="id" id = 'id' value="<?php echo $row["id"] ?>">
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim" id="nim" value="<?php echo $row["nim"] ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" id="nama" value="<?php echo $row["nama"] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email" value="<?php echo $row["email"] ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" id="jurusan" value="<?php echo $row["jurusan"] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Simpan</button></td>
                </tr>
            <?php endforeach; ?>
            </table>
    </form>
</body>

</html>