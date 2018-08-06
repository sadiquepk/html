<?php
$servername="localhost"; 
$username="root"; 
$password="";
$dbname="dbs";

$conn=new mysqli($servername,$username,$password,$dbname);



if($conn->connect_error)
 {
 	echo "connection fail";
	# code...
 }
else
{
	echo "connection success";
}


$query='SELECT * FROM user_info';

$res=mysqli_query($conn,$query);
  // output data of each row
   $row = mysqli_fetch_assoc($res);

   print_r($row);
   
?>
