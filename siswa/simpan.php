<?php
if(isset($_POST['simpan'])){
    include_once('koneksi.php');
    $nama_siswa = $_POST['nama_siswa'];
    $kapasitas    = $_POST['kapasitas'];
    $terisi       = $_POST['terisi'];

    $sql="INSERT INTO siswa SET nama_siswa='$nama_siswa', kapasitas='$kapasitas', terisi='$terisi' ";
    $simpan=mysqli_query($koneksi, $sql);
    if($simpan) {
        header('location:index.php');
    } else {
        include "index.php?m=siswa=";
        echo 'script language="JavaScipt">';
        echo 'alert("data gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "<script>window.history.back()</script>";
}
?>