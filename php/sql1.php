<?php
$servername="localhost"; 
$username="root"; 
$password="";
$dbname="dbs";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql = "INSERT INTO tbl_cv('cv_id', 'cv_Fname', 'cv_Lname','cv_Eid') VALUES('', 'Dol','jolly','dj@exmple.com')";

if ($conn->query($sql) === TRUE)
 {
    echo "New records created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
