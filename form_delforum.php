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
$query = "SELECT * FROM tbl_forum where nim='$cari'";   
$result = mysqli_query($link,$query);
while ($data = mysqli_fetch_array($result)) 
{         
$nim  =$data['nim'];
$f1 = $data["f1"];
$f2 = $data["f2"];
$f3 = $data["f3"];
$f4 = $data["f4"];
$f5 = $data["f5"];
$f6 = $data["f6"];
$f7 = $data["f7"];
$f8 = $data["f8"];
$f9 = $data["f9"];
$f10 = $data["f10"];
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
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>F1</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $f1;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>F2</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $f2;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>F3</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $f3;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>F4</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $f4;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>F5</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $f5;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>F6</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $f6;?></b></font></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="2" color="yellow"><b>F7</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $f7;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>F8</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $f8;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>F9</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $f9;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>F10</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $f10;?></b></font></td>
</tr>
<tr>
	<td align="right" width="35%"><font face="verdana" size="2" color="yellow"><b>Nilai</td>
	<td align="center"><font face="verdana" size="1" color="yellow"><b>:</td>
	<td><font size="2" color="blue"><b><?php echo $nilai;?></b></font></td>
</tr>
<tr>
	<td colspan=3 align="center"><br>	
	<font size="3" color="black" face="calibri"><b>YAKIN AKAN DIHAPUS ???</b></font><br>
<a href="proses_delforum.php?id=<?php echo $nim;?>" style="text-decoration:none">
<font color="darkred" face="calibri" size="4"><b>YA</b></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="forum.php" style="text-decoration:none">
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
