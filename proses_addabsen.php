<?php
$nim = $_POST["vnim"];
$a1 = $_POST["va1"];
$a2 = $_POST["va2"];
$a3 = $_POST["va3"];
$a4 = $_POST["va4"];
$a5 = $_POST["va5"];
$a6 = $_POST["va6"];
$a7 = $_POST["va7"];
$a8 = $_POST["va8"];
$a9 = $_POST["va9"];
$a10 = $_POST["va10"];
$nilai = $_POST["vnilai"];
include"koneksi.php";
$v1 = "insert into tbl_absensi values ('$nim','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$nilai')";
$result =mysqli_query($link,$v1);
$v2 = "update tbl_absensi set nilai=(a1+a2+a3+a4+a5+a6+a7+a8+a9+a10)/10 where nilai='$nilai'";
$result = mysqli_query($link,$v2); 
print("<html><head><meta http-equiv='refresh'content='0 url=absensi.php'>
</head><body</body></html>");
?>