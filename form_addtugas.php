<?php
	ini_set('display_errors',0); 
	set_time_limit(300);
	error_reporting(0);
?>

<html>
<body style="background:linear-gradient(135deg,  #EA5C54  0%,#bb6dec 100%);  background-repeat: no-repeat; background-size: 100% 100%">
<table width="100%" border="0">>
		<form method=post action="proses_addtugas.php">
		<table align=center border=0 width=100% height=500>
		<tr align=left>
			<td valign=middle>
			<table align=center border=0 width=20% bgcolor=linear-gradient(45deg,  #35394a 0%,#1f222e 100%);>
			<tr align=left>
				<td colspan=4 align=right>
				 <a href="index.php" class="plain" style="text-decoration:none;"><font face="verdana" size="2" color=white><b>X</b></font></a>
				</td>
			</tr>
			<tr>
				<td><font face="verdana" size="1" color="pink"><b>NIM</td>
				<td><font face="verdana" size="1" color="pink"><b>:</td>
				<td colspan=2><input type="text" name="vnim" size="22" color=silver></td>
			</tr>
			<tr>
				<td width=50%><font face="verdana" size="1" color="pink"><b>T 1</td>
				<td><font face="verdana" size="1" color="pink"><b>:</td>
				<td colspan=2><input type="text" name="vt1" size="22"></td>
			</tr>
            <tr>
				<td width=50%><font face="verdana" size="1" color="pink"><b>T 2</td>
				<td><font face="verdana" size="1" color="pink"><b>:</td>
				<td colspan=2><input type="text" name="vt2" size="22"></td>
			</tr>
            <tr>
				<td width=50%><font face="verdana" size="1" color="pink"><b>T 3</td>
				<td><font face="verdana" size="1" color="pink"><b>:</td>
				<td colspan=2><input type="text" name="vt3" size="22"></td>
			</tr>
            <tr>
				<td width=50%><font face="verdana" size="1" color="pink"><b>T 4</td>
				<td><font face="verdana" size="1" color="pink"><b>:</td>
				<td colspan=2><input type="text" name="vt4" size="22"></td>
			</tr>
            <tr>
                <td width=50%><font face="verdana" size="1" color="pink"><b>Nilai</td>
                <td><font face="verdana" size="1" color="pink"><b>:</td>
                <td colspan=2></td>
            </tr>


			<tr>
				<td colspan=2>&nbsp;</td>
				<td colspan=2><input type="submit" name="submit" value="ADD"></td>
			</tr>
			</table>
		</td></tr>
		</table>
		</form>
</body>
</html>