<?php
if (isset($_POST['simpan'])) {
    include_once "koneksi.php";
    $nama_md   = $_POST['nama_md'];
    $sks = $_POST['sks'];

    $sql = "INSERT INTO matadiklat SET nama_md='$nama_md', sks='$sks'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location:index.php?m=matadiklat&s=tampil');
        //echo "berhasil";
    } else {
        include "index.php?m=matadiklat&s=tampil";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
