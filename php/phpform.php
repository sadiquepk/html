<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dbs";
$mysqli=new mysqli($servername,$username,$password,$dbname);

$sql="SELECT `cv_id`, `cv_Fname`, `cv_Lname`, `cv_Eid` FROM `tbl_cv` WHERE `cv_id` =11 ";

$res=mysqli_query($mysqli,$sql);

$row=mysqli_fetch_assoc($res);
//print_r($row);
?>

<form action="sql11.php" method="post">
    <input type="text" name="cv_id" placeholder="cv_id" value="<?=$row['cv_id']?>">                                               
	<input type="text" name="cv_Fname" placeholder="firstname" value="<?=$row['cv_Fname']?>">
	<input type="text" name="cv_Lname" placeholder="lastname" value="<?=$row['cv_Lname']?>">
	<input type="text" name="cv_Eid" placeholder="emailid" value="<?=$row['cv_Eid']?>">
    <input type="submit" name="">
</form>

</body>
</html>
