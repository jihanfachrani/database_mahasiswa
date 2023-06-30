<?php
$link = mysqli_connect('localhost', 'root', ''); 
    
    if (!mysqli_select_db($link,'basisdata'))     
    	die("Unable to select database: " . mysqli_error($mysql)); 
?>