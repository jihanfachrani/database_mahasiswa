<?php
$nim = $_POST["vnim"];
$nama = $_POST["vnama"];
$kota = $_POST["vkota"];
$tuple_id = $_POST["vtuple_id"];
include"koneksi.php";
$v1 = "insert into tbl_mhs values ('$nim','$nama','$kota','$tuple_id')";
$result =mysqli_query($link,$v1);
print("<html><head><meta http-equiv='refresh'content='0 url=mahasiswa.php'>
</head><body</body></html>");
?>