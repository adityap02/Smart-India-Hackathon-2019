<?php
session_start();
session_destroy();

echo "Sucessfully Logged Out";
header("refresh:3;url=index.php");
 


?>