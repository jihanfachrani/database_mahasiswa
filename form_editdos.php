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
$query = "SELECT * FROM tbl_dosen where nid='$cari'";   
$result = mysqli_query($link,$query);
while ($data = mysqli_fetch_array($result)) 
{         
$nid  =$data['nid'];
$nama =$data['nama'];
}
?>

<form method=post action="proses_editdos.php">
<table align=center border=0 width=35%>
<tr>
	<td align="right"><font face="verdana" size="1" color="blue"><b>NID</td>
	<td align="right"><font face="verdana" size="1" color="blue"><b>:</td>
	<td><?php echo $nid;?></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="blue"><b>NAMA DOSEN</td>
	<td align="right"><font face="verdana" size="1" color="blue"><b>:</td>
	<td><input type="text" name="vnama" value="<?php echo $nama;?>" color=silver></td>
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
