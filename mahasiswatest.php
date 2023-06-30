<?php
ob_start();
session_start();
ini_set('display_errors',0); 
set_time_limit(300);
error_reporting(0);
	
	if(isset($_SESSION['id']))
	{ 
?>
<form method=post action=mahasiswa.php>
<body style="background:url('green1.jpg'); background-repeat: no-repeat; background-size: 100% 100%">
<table width="100%" border="0">

<?php  include "atas.php"; ?>
<tr>
<?php include "menu_kiri.php"; ?>

	<td colspan="2">
<!-- ISI -->

<style>
.myTableBg4 { 
  width:40%;
  min-width: 260px;
  min-height:200px;
  text-align: center;
  /* background-image:url('green2.jpg'); */
  background-repeat: no-repeat;
  background-position: center center;
  border: 1px solid black;
  }
</style>

<?php

include "koneksi.php";

$cari		= $_POST["vcari"];
$kriteria	= $_POST["vkri"];
$kiriman	= $_GET["id"];
$kiriman2	= $_GET["kunci"];


	if ($cari == "NIM")    
		{ $query = "SELECT * FROM tbl_mhs where nim like '%$kriteria%' order by nim";   }
elseif ($cari == "NAMA")    
		{ $query = "SELECT * FROM tbl_mhs where namamhs like '%$kriteria%' order by nim";   }
elseif ($cari == "KOTA")    
		{ $query = "SELECT * FROM tbl_mhs where kota like '%$kriteria%' order by nim";   }
else
		{ $query = "SELECT * FROM tbl_mhs order by nim";   }


//echo $query;
		
?>

<table width=30% border=0 cellspacing=0 cellpadding=1 align=center class="myTableBg4">
<tr>
	<td>

<table width=100% border=0 cellspacing=1 align=center>
<tr valign=top height=35>
	<td align=center width=3%><a href="form_addmhs.php" style="text-decoration:none"><img src="plus3.jpg" width="25"></a></td>

	<td colspan=9 align=right>
	<font size=2 color=gray><b>&nbsp;</b></font>
			<select name=vcari style="background-color:#4A2810; border: solid 1px #8C5414; font-size:12px; color:white;">
              <option value="NIM">NIM</option>
              <option value="NAMA">NAMA</option>
              <option value="KOTA">KOTA</option>
            </select>
	<input type=text size=15 name=vkri style="background-color:#4A2810; border: 
    solid 1px #8C5414; font-size:12px; color:white;">
	<input type="submit" name="cari" value="Cari" style="font-family: verdana; font-weight:bold; font-size:10px; color:darkgreen;">
	</td>
</tr>
<tr bgcolor=black height="21">
	<td align=center><font face=calibri size=2 color=white><b>NO</b></font></td>
	<td align=center><font face=calibri size=2 color=white><b>NPM</b></font></td>
	<td align=center><font face=calibri size=2 color=white><b>Nama Mahasiswa</b></font></td>
	<td align=center><font face=calibri size=2 color=white><b>Kota</b></font></td>
	<td align=center width="10%"><font face=calibri size=2 color=white><b>***</b></font></td>
</tr>

<?php
   
//	$query = "SELECT * FROM tbl_mhs";   

    $result = mysqli_query($link,$query);
    $i=0;
	while ($data = mysqli_fetch_array($result)) 
		{         
		$i++; 
		?>

<tr valign=middle height=19 >
	<td align=center><font face=calibri size=2 class="yellowblack"><b><?php echo $i;?></b></font></td>
	<td align=center valign=middle>
		<font face=calibri size=1 color=navy><b><u>&nbsp;<?php echo $data['nim'];?>&nbsp;</u></b></font>
	</td>
	<td align=left><font face=verdana size=1 class="yellowblack"><b><?php echo $data['namamhs'];?></b></font></td>
	<td align=left><font face=verdana size=1 class="yellowblack"><b><?php echo $data['kota'];?></b></font></td>

	<td align=center width="16%">
		<a href="form_editmhs.php?id=<?php echo $data['nim'];?>" style="text-decoration:none">
		<img src="ceklist2.png" width="13"></a>&nbsp;
		<a href="form_delmhs.php?id=<?php echo $data['nim'];?>" style="text-decoration:none">
		<img src="delete.png" width="13"></a>
	</td>
</tr>

<?php	} ?>

<tr valign=middle height=19>
	<td colspan=3>&nbsp;</td>
	<td align="center">
		&nbsp;
	</td>
</tr>
</table>

</td></tr></table>

<!-- ISI -->
	</td>
</tr>		
<?php include "bawah.php"; ?>
</table>
</body>
</form>

<?php
	}
	else
	{
	include("flogin.php");
	}
?>