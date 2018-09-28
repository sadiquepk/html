<?php

$link = mysqli_connect('localhost','root','','db_form');
if($link)
{
    echo '';
}
else {
    {
        echo 'not conencted';
    }
}
?>
<html>
<head>
    <style>
    </style>
</head>
<body style="color:white;">
    <h3 style="margin-left:550px; color:red;"><u><b>LOG IN FORM</b></u></H3> 
  <table align=center style="background-color:grey;">
     <form action="#" method="post">
        <tr>
            <td><label>Username </label></td>
            <td><input type="text" name="txt_username" id="txt_username"/></td>
        </tr>
        <tr>
            <td><label>Password</label></td>
            <td><input type="password" name="txt_password" id="txt_password"/></td>
        </tr>
        
        <tr>
            <td></td>
            <td colspan=2><input type="submit" value="Login" name="submit_button" id="submit_button"/></td>
        </tr>
    </form>
  </table>
</body>
</html>

<?php
if(isset($_POST['submit_button']))
{
    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];

    $slct = "SELECT * FROM form WHERE  form_mail='$username' AND form_name='$password'";
    $conct = mysqli_query($link,$slct);
    if(mysqli_num_rows($conct)>0)
    {
        echo "<script> alert('Sucsessfully logined')</script>";
    }
    else 
    {
        echo "<script> alert('Invalid username or password')</script>";   
    }
}
?>