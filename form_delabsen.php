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
$query = "SELECT * FROM tbl_absensi where nim='$cari'";   
$result = mysqli_query($link,$query);
while ($data = mysqli_fetch_array($result)) 
{         
$nim  =$data['nim'];
$a1 = $data["a1"];
$a2 = $data["a2"];
$a3 = $data["a3"];
$a4 = $data["a4"];
$a5 = $data["a5"];
$a6 = $data["a6"];
$a7 = $data["a7"];
$a8 = $data["a8"];
$a9 = $data["a9"];
$a10 = $data["a10"];
$nilai = $data["nilai"];
}
?> <br><br>
<table align=center border=0 width=40% cellspacing="1">
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>NIM</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $nim;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>A1</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $a1;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>A2</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $a2;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>A3</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $a3;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>A4</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $a4;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>A5</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $a5;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>A6</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $a6;?></b></font></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="2" color="yellow"><b>A7</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $a7;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>A8</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $a8;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>A9</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $a9;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>A10</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $a10;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>Nilai</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $nilai;?></b></font></td>
</tr>
<tr>
	<td colspan=3 align="center"><br>	
	<font size="3" color="black" face="calibri"><b>YAKIN AKAN DIHAPUS ???</b></font><br>
<a href="proses_delabsen.php?id=<?php echo $nim;?>" style="text-decoration:none">
<font color="darkred" face="calibri" size="4"><b>YA</b></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="absensi.php" style="text-decoration:none">
<font color="lightgreen" face="calibri" size="4"><b>BATAL</b></font></a>
	</td>
</tr>
</table>
<input type="hidden" name="kunci" value="<?php echo $cari;?>">
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
