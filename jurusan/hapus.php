<?php
if(isset($_GET['id'])){
    include_once('koneksi.php');
    $id = $_GET['id'];

    $sql="DELETE DROM jurusan WHERE id='$id'";
    $simpan=mysqli_query($koneksi, $sql);
    if($simpan) {
        header('location:index.php');
    } else {
        include "index.php?m=jurusan=";
        echo 'script language="JavaScipt">';
        echo 'alert("data gagal dihapus")';
        echo '</script>';
    }
} else {
    echo "<script>window.history.back()</script>";
}
?>