<?php
	ini_set('display_errors',0);
	include "koneksi.php";
	
	$username=$_POST['vuid'];					
	$password=$_POST['vpwd'];	

	$query = "SELECT * FROM basisdata.tbl_user WHERE user_id='".$username."'";  
    $result = mysqli_query($link,$query);      
	
	while ($data = mysqli_fetch_array($result)) 
    {
	$username2=$data['user_id'];
	$nama2=$data['nama'];
	$password2=$data['pwd'];
	}
	
		if(trim($username) != trim($username2))
           	{ 
			    ?>
				<script language="javascript">
                alert("USER TIDAK TERDAFTAR !!")
				location.href="flogin.php";
				</script>
				<?php
			}
	elseif((trim($username) == trim($username2)) && trim($password) != trim($password2))
			{		
			    ?>
				<script language="javascript">
                alert("SALAH PASSWORD !!")
				location.href="flogin.php";
				</script>
				<?php

			}
	elseif(trim($username) == trim($username2) && trim($password) == trim($password2) && $username!= "" && $password != "")
			{					
			$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			session_start();
					$_SESSION['id']=$username2;
					$u = $_SESSION['id'];
					
						?>
						<script language="javascript">
						alert("Login SUKSES !!")
						location.href="index.php";
						</script>
						<?php
			}
?>