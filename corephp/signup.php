<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="row">
<div class="col-lg-6 form">
<h3>Signup</h3>
<form action="action.php" method="post">
<label for="name"><b>Name</b></label><input type="text" name="name" placeholder="Enter the name." class="form-control"required>
<label for="age"><b>Age</b></label><input type="text" name="age"placeholder="Enter the age."class="form-control" required>
<label for="gender"><b>Gender</b></label><input type="radio" name="gnd" class="form-check" required >
<label for="district"><b>District</b></label><input type="text" name="dist" class="form-control"required placeholder="please select district">
<label for="phone"><b>Phone.no</b></label><input type="tel" class="form-control" placeholder="Enter the no "required name="phn">
<label for="email"><b>EmailId</b></label><input type="email" class="form-control" required placeholder="Enter the email" name="email"><br>
<button class="btn btn-outline-dark">Signup</button>
</form>
</div>
</div>
<!-- // log in section -->
<div class="col-lg-6 form">
<h3>Login</h3>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>    
</body>
</html>