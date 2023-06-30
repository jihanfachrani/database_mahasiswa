<?php
	$nid   = $_GET["id"];

	include "koneksi.php";

	$v1 = "delete from tbl_dosen where nid='$nid'";
	$result = mysqli_query($link,$v1); 

//echo $v1;
	print("<html><head><meta http-equiv='refresh' content='0 url=dosen.php'></head><body</body></html>");
?>