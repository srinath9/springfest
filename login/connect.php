<?php 

	$host = 'localhost';
	$root = 'root';
	$pass = 'srinath';
	
	if(@mysql_connect($host,$root,$pass) && @mysql_select_db('test')){
	
	}
	else{
echo "not connected";
	}
	
	


?>
