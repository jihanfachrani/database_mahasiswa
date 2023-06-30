<?php
$kodemk = $_POST["vkodemk"];
$nama = $_POST["vnama"];
$sks = $_POST["vsks"];
include"koneksi.php";
$v1 = "insert into tbl_mk values ('$kodemk','$nama','$sks')";
$result =mysqli_query($link,$v1);
print("<html><head><meta http-equiv='refresh'content='0 url=matkul.php'>
</head><body</body></html>");
?>