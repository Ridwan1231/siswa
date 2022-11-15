<?php

$koneksi = mysqli_connect("localhost","root","Ridwan123","siswa_db");


if (mysqli_connect_error()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}

?>