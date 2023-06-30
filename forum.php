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
<table width=60% border=0 cellspacing=1 cellpadding=0 align=center>
<tr bgcolor=black height="25">
<td align=center><font face=calibri size=2 color=white><b>NO</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>NIM</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>F1</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>F2</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>F3</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>F4</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>F5</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>F6</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>F7</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>F8</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>F9</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>F10</b></font></td>
<td align=center><font face=calibri size=2 color=white><b>Nilai</b></font></td>
<td align=center width="10%"><font face=calibri size=2 color=white><b>***</b></font></td>
</tr>

<?php
include "koneksi.php";   
$query = "SELECT * FROM tbl_forum";   
$result = mysqli_query($link,$query);
$i=0;

while ($data = mysqli_fetch_array($result)) 
{         
$i++; 
?>

<tr valign=middle height=25>
<td align=center><font face=calibri size=2 class="yellowblack"><b><?php echo $i;?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['nim'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['f1'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['f2'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['f3'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['f4'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['f5'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['f6'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['f7'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['f8'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['f9'];?></b></font></td>
<td align=center><font face=arial size=1 color=black><b><?php echo $data['f10'];?></b></font></td>
<td align=center><font face=verdana size=1 class="yellowblack"><b><?php echo $data['nilai'];?></b></font></td>



<td align=center width="16%"> <a href="form_editforum.php?id=<?php echo $data['nim'];?>" style="text-decoration:none">
<img src="edit1.png" width="20"></a>&nbsp;
<a href="form_delforum.php?id=<?php echo $data['nim'];?>" style="text-decoration:none"><img src="delete1.png" width="24"></a>
</td>
</tr>


<?php  } ?>

<tr valign=middle height=19>
<td colspan=13>&nbsp;</td>
<td align="center">	<a href="form_addforum.php" style="text-decoration:none"><br><img src="add.png" width="25"></a></td>
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
