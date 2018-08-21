<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dbs";
$mysqli=new mysqli($servername,$username,$password,$dbname);


$sql="UPDATE `tbl_cv` SET `cv_Fname` = 'fgh', `cv_Lname` = 'jkl', `cv_Eid` = 'bnm' WHERE `tbl_cv`.`cv_id` = 6";


if($es=mysqli_query($mysqli,$sql)) { 
while($row=mysqli_fetch_array($es,MYSQLI_ASSOC))
{	
//print_r($row);     

$val=$row['cv_Fname'];
echo "<br>";
print_r($val);


//$val2=$esult[]['cv_id'];

//print_r($val);
//	print_r($val2);$f
}

		
} 
else
{     
	echo 'fail';
 	 }
$fname=$_POST['cv_Fname'];
$lname=$_POST['cv_Lname'];
$id=$_POST['cv_Eid'];




/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$stmt = $mysqli->prepare("update tbl_cv values('',?,?,?)");
$stmt->bind_param('sss', $fname, $lname, $id);


if($stmt->execute()) { 
//print_r($row);    

//$val=$row['cv_Fname'];
echo "added";
//print_r($val);     


//$val2=$esult[]['cv_id'];

//print_r($val);
//	print_r($val2);

	
} else {     echo 'fail'; }
?>
