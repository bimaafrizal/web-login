<?php

require 'modularitasCurdCreate.php';

if(isset($_POST["submit"])) {
    if(tambah($_POST) > 0 ) {
        echo "
        <SCRIPt>
            alert('Data berhasil ditambahkan');
            document.location.href = 'curdRead.php';
        </SCRIPt>
        ";
    }
    else {
        echo "
        <SCRIPt>
            alert('Data gagal ditambahkan');
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
    <h1>Form Tambah Data Mahasiswa</h1>
    <form action="" method= "post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type= "text" name= "nim" id= "nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type= "text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" id="jurusan"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="submit" >Simpan</button></td>
            </tr>
        </table>
    </form>
</body>

</html>