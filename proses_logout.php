<?php
ini_set('display_errors',0);
$uid = $_GET['id'];
session_start();
	
$u = $_SESSION['id']; 
session_destroy ();
?>

<script language="javascript">
alert("Logout Berhasil !!")
location.href="flogin.php";
</script>
