<?php 
	$connection = new mysqli('localhost', 'root','','dbvecina');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>