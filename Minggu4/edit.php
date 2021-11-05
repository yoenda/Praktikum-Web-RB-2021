<?php
include "connect.php";
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkatan"];

$sql = "update data_mahasiswa set nama='".$nama."', prodi='".$prodi."', angkatan='".$angkatan."' where nim = '".$nim."' ";
$hasil = mysqli_query($kon,$sql);
?>