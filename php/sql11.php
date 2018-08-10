<?php
$servername="localhost"; 
$username="root"; 
$password="";
$dbname="dbs";
$conkey=new mysqli($servername,$username,$password,$dbname);
//print_r($_POST);

$id=$_POST['cv_id'];
$fname=$_POST['cv_Fname'];
$lname=$_POST['cv_Lname'];
$eid=$_POST['cv_Eid'];

$sql="UPDATE `tbl_cv` SET `cv_Fname` ='$fname', `cv_Lname` = '$lname', `cv_Eid` = '$eid' WHERE `tbl_cv`.`cv_id` =11";


if(mysqli_query($conkey,$sql))
{
	echo "updated";
}
else
{
	echo "failed";
}
?>