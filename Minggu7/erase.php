<?php
include "connect.php";
$id = $_POST["nama"];

$sql = "delete from data_pembeli where nama='".$nama."'";
$hasil = mysqli_query($kon,$sql);
?>