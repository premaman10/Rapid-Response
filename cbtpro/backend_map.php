<?php 
require "all.php";
header('Access-Control-Allow-Origin: *');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_COOKIE["login"]))
	{
	 $result3 = array();
     try
     {
		 $endpoint=$_POST["endpoint"];
	     $pickup=$_POST["pickup"];
	     $distance=$_POST["distance"];
	     $time=$_POST["time"];
	     $cartype=$_POST["cartype"];
	     $price=$_POST["price"];

	     $conn=DB_connection();
	     $query="insert ignore into bookinginfo (userID,pickupoint,endpoint,distance,price,cartype) values ('{$_COOKIE["login"]}','{$pickup}','{$endpoint}','{$distance}','{$price}','{$cartype}')";
	     $result=$conn->query($query);
	     if($result===true)
	     {
	     	$last_id = $conn->insert_id;
	     	//echo $last_id;
	     	if($last_id > 0)
	     	{
		     	$result3["status"] = "success";
	     	}
	     	else
	     	{
		     	$result3["status"] = "fail";
	     	}
	     }
	     else
	     {
	     	$result3["status"] = "fail";
		 }
     }
     catch(Exception $e)
     {
     	echo $e;
     	$result3["status"] = "fail";
     }   
	}
	else
	{    
		$result3["islogin"] = "fail";

	}
echo json_encode($result3);
}
 ?>