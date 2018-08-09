<?php
$servername="localhost"; 
$username="root"; 
$password="";
$dbname="dbs";
$conkey=new mysqli($servername,$username,$password,$dbname);
$sql="UPDATE `tbl_cv` SET `cv_Fname` = 'zaadi', `cv_Lname` = 'daa', `cv_Eid` = 'nas' WHERE `tbl_cv`.`cv_id` = 6";
if(mysqli_query($conkey,$sql))
{
	echo "updated";
}
else
{
	echo "failed";
}
?>