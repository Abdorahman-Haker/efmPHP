<?php 

session_destroy();
setcookie(session_name(),"", time() -2000,"/");
header("Location:authentifier.php")
?>