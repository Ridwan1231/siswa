<?php
include 'koneksi.php';

$nipd = $_POST['nama'];
$nama = $_POST['nipd'];
$kelas = $_POST['kelas'];
$proli = $_POST['proli'];

Mysqli_query($koneksi,"insert into tb_siswa values('','$nama','$nipd','$kelas', '$proli')");

header("location:tampil.php");

?>