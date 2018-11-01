<?php
$conn=mysqli_connect('localhost','root','','db_form');
session_start();
$user=$_POST['uname'];
$password=$_POST['psw'];
$_SESSION['user']=$user;

$var="SELECT * FROM `tb_user` WHERE `user_name` LIKE '$user' AND `password` LIKE '$password'";
$query=mysqli_query($conn,$var);

if (mysqli_num_rows($query)>0) 

{
 $result=mysqli_fetch_array($query);
 echo $result[1];
echo"<a href = 'registr.php'>LOGOUT</a>";
}
else {
    echo "invalid";
}

?>