<?php
$nid = $_POST["vnid"];
$nama = $_POST["vnama"];
include"koneksi.php";
$v1 = "insert into tbl_dosen values ('$nid','$nama')";
$result =mysqli_query($link,$v1);
print("<html><head><meta http-equiv='refresh'content='0 url=dosen.php'>
</head><body</body></html>");
?>