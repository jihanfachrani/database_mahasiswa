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
<td width=10% height="450" align="center" valign="top"> <?php include "menu_kiri.php"; ?>
</td>
<td colspan="2">

<!-- ISI -->
<?php
include "koneksi.php";

$cari = $_GET["id"];
$query = "SELECT * FROM tbl_mk where kodemk='$cari'";   
$result = mysqli_query($link,$query);
while ($data = mysqli_fetch_array($result)) 
{         
$kodemk  =$data['kodemk'];
$nama =$data['nama'];
$sks =$data['sks'];
}
?>

<form method=post action="proses_editmk.php">
<table align=center border=0 width=50%>
<tr>
	<td align="right"><font face="verdana" size="1" color="yellow"><b>KODEMK</td>
	<td align="right"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><?php echo $kodemk;?></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="yellow"><b>NAMA MATKUL</td>
	<td align="right"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><input type="text" name="vnama" value="<?php echo $nama;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="yellow"><b>SKS</td>
	<td align="right"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><input type="text" name="vsks" value="<?php echo $sks;?>" color=silver></td>
</tr>
<tr>
	<td colspan=2>&nbsp;</td>
	<td colspan=2><input type="submit" name="submit" value="SIMPAN"></td>
</tr>
</table>
<input type="hidden" name="kunci" value="<?php echo $cari;?>">
</form>
<!– END ISI -->

</td>
</tr>
<?php include "bawah.php"; ?>
</table>
</body>

<?php
}
else
{ include("flogin.php"); }
?>
