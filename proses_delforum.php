<?php
	$nim   = $_GET["id"];

	include "koneksi.php";

	$v1 = "delete from tbl_forum where nim='$nim'";
	$result = mysqli_query($link,$v1); 

//echo $v1;
	print("<html><head><meta http-equiv='refresh' content='0 url=forum.php'></head><body</body></html>");
?>