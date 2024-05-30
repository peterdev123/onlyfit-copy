<?php 
	$connection = new mysqli('localhost', 'root','','dbvecinaf3');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>