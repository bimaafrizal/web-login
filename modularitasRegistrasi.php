<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_kampus');

function query($query)
{

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function registrasi($data)
{
    global $conn;

    //mengambil data
    $username = strtolower($data["username"]);
    $password = mysqli_escape_string($conn, $data["password"]);
    $password2 = mysqli_escape_string($conn, $data["password2"]);

    //konfirmasi apakah username sudah dipakai 
    $result = mysqli_query($conn, "SELECT username FROM tb_user where username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('username sudah terdaftar');  
        </script>
        ";

        return false;
    }

    //konfirmasi password 1 dan 2 sama
    if($password != $password2) {
        echo "
        <script>
            alert('Password tidak sama');  
        </script>
        ";

        return false;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO tb_user VALUES ('', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }
}
?>