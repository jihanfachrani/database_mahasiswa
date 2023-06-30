<?php
$kodemk = $_POST["vkodemk"];
$nama = $_POST["vnama"];
$sks = $_POST["vsks"];
$kunci = $_POST["kunci"];

include "koneksi.php";
$v1 = "update tbl_mk set nama='$nama', sks='$sks' where kodemk='$kunci'";
$result = mysqli_query($link,$v1); 

print("<html><head><meta http-equiv='refresh' content='0 url=matkul.php'></head><body</body></html>");
?>
