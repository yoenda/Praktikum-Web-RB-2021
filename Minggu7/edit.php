<?php
include "connect.php";
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$umur = $_POST["umur"];
$no_telepon = $_POST["no_telepon"];

$sql = "update data_pembeli set jenis_kelamin='".$jenis_kelamin."', umur='".$umur."', no_telepon='".$no_telepon."' where nama= '".$nama."' ";
$hasil = mysqli_query($kon,$sql);
?>