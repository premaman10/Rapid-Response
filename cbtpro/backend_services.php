<?php 
    require "all.php";
    $data5=array();
    $data5["status"]=400;
    $allrows=array();
     if(isset($_COOKIE["login"]))
     {
        if($_SERVER["REQUEST_METHOD"] == "POST")
      {
         $userID=$_COOKIE["login"];
         
         // strrev
         
         $conn=DB_connection();
         $query="select * from bookinginfo where userID={$userID} ";
         $result=$conn->query($query);
         if($result->num_rows>0)
         {  
            
         while($output=$result->fetch_assoc())
         {
            $allrows[]=$output;
         }
             

            // echo json_encode($data5);
            // echo json_encode($allrows);
            $data5["alldatavalue"]=$allrows;
            
             
         }
         else
            $data5["res"]="user id not founded";
           
        }
   
     }
     else
      {
          $data5["islogin"] = "fail";
      }  
      echo json_encode($data5);
 ?>
