<?php

require 'core.php';


if(!loggedin()){
	
	
	echo $user;
		if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['passagain'])){
			
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$passagain = $_POST['passagain'];
			
			if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['passagain'])){
				if($pass != $passagain){
				
					echo 'pass does not match';
				}
				else{
				echo 'ok1 ';
					$query = "SELECT `username` FROM `test`.`login` WHERE `username`='$user'" ;
					echo ' ok2';
					$query_run = mysql_query($query);
					echo ' ok2 ';
					if(mysql_num_rows($query_run) >= 1 ){
						echo "username has already been taken";
						
					}
					else{
						echo ' ok3 ';
						$query = "INSERT INTO `test`.`login` (`id`, `username`, `password`) VALUES (NULL, '$user', '$pass')";
						$suc=mysql_query($query) or die("error in query");
						echo ' ok3';
						if($suc){
							header('Location: register_success.php');
						echo ' ok4 ';
						}
						else{
							echo ' error while registering';
						
						}
					
					}
				
				
				}
			
			
			}
			else{
				echo 'all are required';
			
			}
		
		}
		

}
else if(loggedin()){
	}
	

?>

<form action="register.php" method="POST"> 
	username : <input type = "text" name = "user" ><br >
	password : <input type = "password" name= "pass" ><br >
	password again : <input type = "password" name="passagain"/><br >

	<input type="submit" value = "register" />
</form>
