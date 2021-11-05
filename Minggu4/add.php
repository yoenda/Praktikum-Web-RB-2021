<?php
//menyambungkan dengan file connect dimana terdapat include database
include "connect.php";
//menerima input nilai untuk database melalui form html
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];
$angkatan=$_POST["angkatan"];

//query input melakukan input data kedalam database tabel mahasiswa
$sql="insert into data_mahasiswa (nim,nama,prodi,angkatan) values('$nim','$nama','$prodi','$angkatan')";

//menjalankan query diatas
$hasil=mysqli_query($kon,$sql);

?>