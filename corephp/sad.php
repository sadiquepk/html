<?php


  $conn=mysqli_connect('localhost','root','','db_form');
  $user=$_POST['user'];
  $password=$_POST['pass'];
  $phone=$_POST['phone'];
  $email=$_POST['emailid'];
  $data="INSERT INTO `tb_user` ( `user_name`, `password`, `phone_no`, `email_id`) VALUES ('$user', '$password', '$phone', '$email')";
  $query=mysqli_query($conn,$data);
  if ($query) {
      echo "ok";
  }
else {
echo "error";
}
    
?>