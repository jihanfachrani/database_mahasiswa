<?php
ob_start();
session_start();
ini_set('display_errors',0); 
set_time_limit(300);
error_reporting(0);
	
if(isset($_SESSION['id']))
  { 
?>

<body style="background:url('jiji.jpg'); background-repeat: no-repeat; background-size: 100% 100%">
<table width="100%" border="0">

<?php  include "atas.php"; ?>

<tr>
<td width="10%" height="450" align="center" valign="top">
	<?php include "menu_kiri.php"; ?></td>
<td colspan="2" align="center" valign="middle">
<img src="logo1.png" width="195"></td>
</tr>		

<?php include "bawah.php"; ?>

</table>
</body>

<?php
	}
	else
	{ include("flogin.php"); }
?>
