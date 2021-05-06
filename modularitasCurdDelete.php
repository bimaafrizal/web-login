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


function hapus($id) {
    global $conn;
    $query  = "DELETE FROM db_mahasiswa WHERE id = '$id' ";
    mysqli_query($conn, $query); 
    return mysqli_affected_rows($conn);
}
?>