<?php

$conn = mysqli_connect('localhost', 'root', '' , 'db_kampus');

function query($query) {

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    
    return $rows;
}
function ubah($data) {
    global $conn;
    $id = $data['id'];
    $nim = $data['nim'];
    $nama = $data['nama'];
    $email = $data['email'];
    $jurusan = $data['jurusan'];


    $query = "UPDATE db_mahasiswa SET
                nim = '$nim',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan'
                WHERE id = $id;
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>