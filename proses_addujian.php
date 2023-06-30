<?php
$nim = $_POST["vnim"];
$uts = $_POST["vuts"];
$uas = $_POST["vuas"];
include"koneksi.php";
$v1 = "insert into tbl_ujian values ('$nim','$uts','$uas')";
$result =mysqli_query($link,$v1);
print("<html><head><meta http-equiv='refresh'content='0 url=ujian.php'>
</head><body</body></html>");
?>