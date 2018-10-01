<?php

$link = mysqli_connect('localhost','root','','db_register');
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
    <h3 style="margin-left:550px; color:red;"><u><b>REGISTRATION FROM</b></u></H3> 
  <table align=center style="background-color:grey;">
     <form action="#" method="post">
        <tr>
            <td><label>Name </label></td>
            <td><input type="text" name="txt_name" id="txt_name"/></td>
        </tr>
        <tr>
            <td><label>Age </label></td>
            <td><input type="text" name="txt_age" id="txt_age"/></td>
        </tr>
        <tr>
            <td><label>Gender</label></td>
            <td><input type="radio" name="radio_gender" id="radio_gender_male" value="0"/>Male
            <input type="radio" name="radio_gender" id="radio_gender_female" value="1"/>Female</td>
        </tr>
        <tr>
            <td><label>Address</label></td>
            <td><textarea name="txt_address" id="txt_address" cols=20 rows= 4></textarea></td>
        </tr>
        <tr>
            <td><label>Email</label>
            <td><input type="text" name="txt_mail" id="txt_mail"/></td>
        </tr>
        <tr>
            <td><label>Phone</label></td>
            <td><input type="text" name="txt_phone" id="txt_phone"/></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td></td>
            <td colspan=2><input type="submit" value="Register" name="submit_button" id="submit_button"/></td>
        </tr>
    </form>
  </table>
</body>
</html>

<?php
if(isset($_POST['submit_button']))
{
 $name = $_POST['txt_name'];
 $age = $_POST['txt_age'];
 $gndr = $_POST['radio_gender'];
 $address = $_POST['txt_address'];
 $mail = $_POST['txt_mail'];
 $phn = $_POST['txt_phone'];

 $insrt = "INSERT INTO form(form_name,form_age,form_gender,form_address,form_mail,form_phone) VALUES('$name','$age','$gndr','$address','$mail','$phn')";
 $conct = mysqli_query($link,$insrt);
 if($conct)
 {
     echo "<script> alert('Sucsessfully inserted')</script>";
 }
 else 
 {
    echo "<script> alert('Unsucsessfully inserted')</script>";
 }
}

?>

