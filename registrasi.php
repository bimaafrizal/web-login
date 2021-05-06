<?php
require 'modularitasRegistrasi.php';

if (isset($_POST["registrasi"])) {

    if (registrasi($_POST) > 0) {
        echo "
        <script>
            alert('Registrasi Berhasil');  
        </script>
        ";
    } else {
        echo mysqli_error($conn);
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
    <h1>Form Registrasi</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" id="username" name="username" required></td>
            </tr>
            <tr>
                <td>Pasword</td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td>Konfirmasi Pasword</td>
                <td><input type="password" id="password2" name="password2" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="registrasi">Daftar</button></td>
            </tr>
        </table>
    </form>

</body>

</html>