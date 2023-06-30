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
?>

<form method=post action="proses_editabsen.php">
<table align=center border=0 width=50%>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>NIM</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><?php echo $nim;?></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>A1</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="va1" value="<?php echo $a1;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>A2</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="va2" value="<?php echo $a2;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>A3</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="va3" value="<?php echo $a3;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>A4</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="va4" value="<?php echo $a4;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>A5</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="va5" value="<?php echo $a5;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>A6</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="va6" value="<?php echo $a6;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>A7</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="va7" value="<?php echo $a7;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>A8</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="va8" value="<?php echo $a8;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>A9</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="va9" value="<?php echo $a9;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>A10</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="va10" value="<?php echo $a10;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>Nilai</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><?php echo $nilai;?></td>
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
