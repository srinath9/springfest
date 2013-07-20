<?php


if(isset($_POST['user']) && isset($_POST['pass'])){


		

	$name = $_POST['user'];
	$pass = $_POST['pass'];

		if(!empty($name) && !empty($pass)){

			$query = "SELECT `id` FROM `login` WHERE `username`='$name' AND `password`='$pass' ";


			if($query_run = mysql_query($query)){

				$query_num_rows = mysql_num_rows($query_run);

					if($query_num_rows == 0){


					}
					else if($query_num_rows == 1){


					$user_id = mysql_result($query_run,0,'id');


					$_SESSION['user_id']=$user_id;

					header('Location: index.php');
					
					}

				}
			
			}
		

}

?>

<form action = "<?php echo $current_file1; ?>" method = "POST" >
user : <input type= "text" name = "user" />
pass : <input type = "password" name = "pass" />
<input type="submit" value = "submit" />

</form>


<?php

require 'home.html';

?>
