<?php

$conn=mysqli_connect('localhost','root','','db_form');

$Name=$_POST['Name1'];
$Email=$_POST['Email1'];
$Message=$_POST['Message1'];

$var="INSERT INTO `tb_textile` (`textile_id`, `textile_name`, `textile_email`, `textile_message`) VALUES ('','$Name','$Email','$Message')";
$query=mysqli_query($conn,$var);
if ($query) {
    echo "ok";
}
else {
    echo "not ok";
}


?>