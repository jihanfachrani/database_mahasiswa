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
<td width="10%" height="450" align="center" valign="top"> <?php include "menu_kiri.php"; ?> </td>
<td colspan="2">

<!-- ISI -->
<table width=75% border=0 cellspacing=1 cellpadding=0 align=center>
<tr bgcolor=black height="28">
<td align=center><font face=calibri size=2 color=white><b>NO</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>NIM</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>ABSEN</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>FORUM</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>TUGAS</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>UTS</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>UAS</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>AKHIR</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>HM</b></font></td>
<td align=center width="20%"><font face=calibri size=2 color=white><b>KET</b></font></td>
<td align=center width="10%"><font face=calibri size=2 color=white><b>***</b></font></td>
</tr>

<?php
include "koneksi.php";   
$query = "SELECT * FROM tbl_akhir";   
$result = mysqli_query($link,$query);
$i=0;

while ($data = mysqli_fetch_array($result)) 
{         
$i++; 
?>

<tr valign=middle height=25>
<td align=center><font face=calibri size=2 class="yellowblack"><b><?php echo $i;?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['nim'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['abs'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['frm'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['tgs'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['uts'];?></b></font></td>
<td align=center><font face=arial size=1 class="yellowblack"><b><?php echo $data['uas'];?></b></font></td>
<td align=center><font face=arial size=1 class="yellowblack"><?php echo $data['akhir'];?></b></font></td>
<td align=center><font face=arial size=1 class="yellowblack"><b><?php echo $data['hm'];?></b></font></td>
<td align=left><font face=verdana size=1 class="yellowblack"><b><?php echo $data['ket'];?></b></font></td>



<td align=center width="16%"> <a href="form_editnil.php?id=<?php echo $data['nim'];?>" style="text-decoration:none">
<img src="edit1.png" width="20"></a>&nbsp;
<a href="form_delnil.php?id=<?php echo $data['nim'];?>" style="text-decoration:none"><img src="delete1.png" width="24"></a>
</td>
</tr>


<?php  } ?>

<tr valign=middle height=19>
<td colspan=10>&nbsp;</td>
<td align="center">	<a href="form_addnil.php" style="text-decoration:none"><br><img src="add.png" width="25"></a></td>
</tr>
</table>
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
