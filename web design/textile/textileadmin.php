<?php
$connect=mysqli_connect('localhost','root','','db_form');
session_start();
$Email=$_POST['email'];
$Password=$_POST['password'];
$_SESSION['email']=$Email;
$char="SELECT * FROM `tb_admin` WHERE `email_id` LIKE '$Email' AND `password` LIKE '$Password'";
$query=mysqli_query($connect,$char);
if (mysqli_num_rows($query)>0)
 {
    $res=mysqli_fetch_array($query);
    echo $res[1];
    echo "<a href='textile.php'>LOGOUT</a>";

}
else {
    echo "invalid";
}
?>