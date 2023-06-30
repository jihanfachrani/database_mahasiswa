<?php
$nid   = $_POST["vnid"];
$nama  = $_POST["vnama"];
$kunci = $_POST["kunci"];

include "koneksi.php";
$v1 = "update tbl_dosen set nama='$nama' where nid='$kunci'";
$result = mysqli_query($link,$v1); 

print("<html><head><meta http-equiv='refresh' content='0 url=dosen.php'></head><body</body></html>");
?>
