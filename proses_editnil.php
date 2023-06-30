<?php
$nim = $_POST["vnim"];
$abs = $_POST["vabs"];
$frm = $_POST["vfrm"];
$tgs = $_POST["vtgs"];
$uts = $_POST["vuts"];
$uas = $_POST["vuas"];
$akhir = $_POST["vakhir"];
$hm = $_POST["vhm"];
$ket = $_POST["vket"];
$kunci = $_POST["kunci"];
include "koneksi.php";

$v1 = "update tbl_akhir set abs='$abs', frm='$frm', tgs='$tgs', uts='$uts', uas='$uas', akhir='$akhir', hm='$hm', ket='$ket' where nim='$kunci'";
$result = mysqli_query($link,$v1); 
$v2 = "update tbl_akhir set akhir=(abs+frm+tgs+uts+uas)/5 where akhir='$akhir'";
$result = mysqli_query($link,$v2); 
$v3 = " UPDATE tbl_akhir
SET ket=
(CASE
WHEN (akhir>=80) THEN 'LULUS Sangat Memuaskan'
WHEN (akhir>=70 and akhir <=79) THEN 'LULUS Memuaskan'
WHEN (akhir>=59 and akhir <=69) THEN 'LULUS'
WHEN (akhir>=45 and akhir <=58) THEN 'LULUS Kurang Memuaskan'
ELSE ('TIDAK LULUS')
END)";
$result = mysqli_query($link,$v3);
$v4 = " UPDATE tbl_akhir
SET hm=
(CASE
WHEN (akhir>=80) THEN 'A'
WHEN (akhir>=70 and akhir <=79) THEN 'B'
WHEN (akhir>=59 and akhir <=69) THEN 'C'
WHEN (akhir>=45 and akhir <=58) THEN 'D'
ELSE ('E')
END)";
$result = mysqli_query($link,$v4);

print("<html><head><meta http-equiv='refresh' content='0 url=nilai.php'></head><body</body></html>");
?>
