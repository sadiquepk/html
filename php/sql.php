<?php
$servername="localhost";
$username="root";
$password="";
$dbname="DBS";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
 {
 	echo "connection fail";
	# code...
 }
else
{
	echo "connection success";
}
$sql = "CREATE DATABASE DBS";
if ($conn->query($sql) === TRUE) 
{
    echo "Database created successfully";
}
 else 
 {
    echo "Error creating database: ";
 }

$sql ="INSERT INTO user_info(first_name,last_name,email_id) VALUES ('john', 'Doe','john@example.com')";
$sql="INSERT into user_info(first_name,last_name,email_id) VALUES('tim','cook','timcook@example.com')";

if ($conn->query($sql) === TRUE)
 {
    echo "New record created successfully";
 }
 else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
?>
