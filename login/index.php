






<?php 
require "connect.php";
require "core.php";

include "cam.php";



if(loggedin()){
echo " loged in <a href='logout.php' >logout </a>";

}

else{
include "login.php";

}

?>


