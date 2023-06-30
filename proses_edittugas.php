<?php
$nim = $_POST["vnim"];
$t1 = $_POST["vt1"];
$t2 = $_POST["vt2"];
$t3 = $_POST["vt3"];
$t4 = $_POST["vt4"];
$nilai = $_POST["vnilai"];
$kunci = $_POST["kunci"];

include "koneksi.php";
$v1 = "update tbl_tugas set t1='$t1', t2='$t2', t3='$t3', t4='$t4', nilai='$nilai' where nim='$kunci'";
$result = mysqli_query($link,$v1); 
$v2 = "update tbl_tugas set nilai=(t1+t2+t3+t4)/4 where nilai='$nilai'";
$result = mysqli_query($link,$v2); 


print("<html><head><meta http-equiv='refresh' content='0 url=tugas.php'></head><body</body></html>");
?>
