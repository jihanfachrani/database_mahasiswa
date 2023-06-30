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
?>

<form method=post action="proses_editforum.php">
<table align=center border=0 width=50%>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>NIM</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><?php echo $nim;?></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>F1</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vf1" value="<?php echo $f1;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>F2</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vf2" value="<?php echo $f2;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>F3</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vf3" value="<?php echo $f3;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>F4</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vf4" value="<?php echo $f4;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>F5</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vf5" value="<?php echo $f5;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>F6</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vf6" value="<?php echo $f6;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>F7</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vf7" value="<?php echo $f7;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>F8</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vf8" value="<?php echo $f8;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>F9</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vf9" value="<?php echo $f9;?>" color=silver></td>
</tr>
<tr>
	<td align="right"><font face="verdana" size="1" color="skyblue"><b>F10</td>
	<td align="right"><font face="verdana" size="1" color="pink"><b>:</td>
	<td><input type="text" name="vf10" value="<?php echo $f10;?>" color=silver></td>
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
