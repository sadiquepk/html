
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dbs";

$conn=new mysqli($servername,$username,$password);


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
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: ";
}
$sql = "insert into my_guest(firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE)
 {
    echo "New record created successfully";
} 
else
 {
    echo "Error";
}

?>
