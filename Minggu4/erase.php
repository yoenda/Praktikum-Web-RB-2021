<?php
include "connect.php";
$id = $_POST["nim"];

$sql = "delete from data_mahasiswa where nim='".$nim."'";
$hasil = mysqli_query($kon,$sql);
?>