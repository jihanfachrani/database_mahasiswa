<?php
	$kodemk   = $_GET["id"];

	include "koneksi.php";

	$v1 = "delete from tbl_mk where kodemk='$kodemk'";
	$result = mysqli_query($link,$v1); 

//echo $v1;
	print("<html><head><meta http-equiv='refresh' content='0 url=matkul.php'></head><body</body></html>");
?>