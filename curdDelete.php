<?php 
    require "modularitasCurdDelete.php";
    $id = $_GET["id"];

    if(hapus($id) > 0 ) {
        echo "
        <SCRIPt>
            alert('Data berhasil dihapus');
            document.location.href = 'curdRead.php';
        </SCRIPt>
        ";
    }
    else {
        echo "
        <SCRIPt>
            alert('Data gagal dihapus');
            document.location.href = 'curdRead.php';
        </SCRIPt>
        ";
    }
?>