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
$query = "SELECT * FROM tbl_akhir where nim='$cari'";   
$result = mysqli_query($link,$query);
while ($data = mysqli_fetch_array($result)) 
{         
$nim  =$data['nim'];
$abs =$data['abs'];
$frm =$data['frm'];
$tgs =$data['tgs'];
$uts =$data['uts'];
$uas =$data['uas'];
$akhir =$data['akhir'];
$hm =$data['hm'];
$ket =$data['ket'];
}
?>

<form method=post action="proses_editnil.php">
<table align=center border=0 width=50%>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>NIM</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><?php echo $nim;?></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>ABSEN</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vabs" value="<?php echo $abs;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>FORUM</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vfrm" value="<?php echo $frm;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>TUGAS</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vtgs" value="<?php echo $tgs;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>UTS</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vuts" value="<?php echo $uts;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>UAS</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vuas" value="<?php echo $uas;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>AKHIR</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><?php echo $akhir;?></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>HM</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><?php echo $hm;?></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>KET</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><?php echo $ket;?></td>
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
