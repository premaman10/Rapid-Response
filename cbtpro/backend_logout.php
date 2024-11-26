<?php 
     if($_SERVER["REQUEST_METHOD"] == "POST")
      {
        setcookie("login","",-1,"/");
        echo "logged out";
      }
 ?>
