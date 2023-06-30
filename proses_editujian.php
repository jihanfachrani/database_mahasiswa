<?php
$nim   = $_POST["vnim"];
$uts  = $_POST["vuts"];
$uas  = $_POST["vuas"];
$kunci = $_POST["kunci"];

include "koneksi.php";
$v1 = "update tbl_ujian set uts='$uts', uas='$uas' where nim='$kunci'";
$result = mysqli_query($link,$v1); 

print("<html><head><meta http-equiv='refresh' content='0 url=ujian.php'></head><body</body></html>");
?>
