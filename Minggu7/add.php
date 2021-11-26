<?php
include "connect.php";
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$umur = $_POST["umur"];
$no_telepon = $_POST["no_telepon"];

$sql="insert into data_pembeli (nama,jenis_kelamin,umur,no_telepon) values('$nama','$jenis_kelamin','$umur','$no_telepon')";

$hasil=mysqli_query($kon,$sql);

?>