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

function cari($keyword) {
    $query = "SELECT * FROM db_mahasiswa where nama like '%$keyword%' ";

    return query($query);
}
 ?>