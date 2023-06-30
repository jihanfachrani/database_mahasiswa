<?php
$nim = $_POST["vnim"];
$f1 = $_POST["vf1"];
$f2 = $_POST["vf2"];
$f3 = $_POST["vf3"];
$f4 = $_POST["vf4"];
$f5 = $_POST["vf5"];
$f6 = $_POST["vf6"];
$f7 = $_POST["vf7"];
$f8 = $_POST["vf8"];
$f9 = $_POST["vf9"];
$f10 = $_POST["vf10"];
$nilai = $_POST["vnilai"];
include"koneksi.php";
$v1 = "insert into tbl_forum values ('$nim','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$nilai')";
$result =mysqli_query($link,$v1);
$v2 = "update tbl_forum set nilai=(f1+f2+f3+f4+f5+f6+f7+f8+f9+f10)/10 where nilai='$nilai'";
$result = mysqli_query($link,$v2); 
print("<html><head><meta http-equiv='refresh'content='0 url=forum.php'>
</head><body</body></html>");
?>