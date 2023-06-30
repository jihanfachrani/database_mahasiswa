<?php
$nim   = $_POST["vnim"];
$nama  = $_POST["vnama"];
$kota  = $_POST["vkota"];
$kunci = $_POST["kunci"];

include "koneksi.php";
$v1 = "update tbl_mhs set namamhs='$nama' where nim='$kunci'";
$result = mysqli_query($link,$v1); 

print("<html><head><meta http-equiv='refresh' content='0 url=mahasiswa.php'></head><body</body></html>");
?>
