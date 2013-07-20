<?php 
ob_start();
session_start();

$current_file = $_SERVER['SCRIPT_FILENAME'];
$current_file1 = $_SERVER['SCRIPT_NAME'];
$http_server = $_SERVER['HTTP_REFERER'];

function loggedin(){
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

return true;
}
else {
return false;
}


}



?>
