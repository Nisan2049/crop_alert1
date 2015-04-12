<?php
include('users.php');
$o = new user();
if(isset($_POST['signup']))
{
$o->signup();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SignUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" >
  <div class="col-sm-8" style="background-color:lavender;">
  <div class="col-sm-12">
  <h2>Wel-Come to Crop Alert</h2>
</div>
  <form method=POST role="form" class="col-sm-4" name="siggnup">
    <div class="form-group ">
      <label for="name">Name:</label>
      <input type="name" class="form-control" name="name" placeholder="Enter name">
    </div>
    <div class="form-group ">
      <label for="email">Email-Id:</label>
      <input type="emailid" class="form-control" name="email" placeholder="Enter Email">
    </div>
    <div class="form-group ">
      <label for="username">Username:</label>
      <input type="Username" class="form-control" name="username" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
    </div>
    <div class="form-group ">
      <label for="countryname">Country-Name:</label>
      <input type="countryname" class="form-control" name="countryname" placeholder="Enter Country Name">
    </div>
    <div class="form-group">
      <label for="mobileno">Mobile-No:</label>
      <input type="mobileno" class="form-control" name="mobileno" placeholder="Enter mobile-no">

    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" name="signup" class="btn btn-default">Submit</button>
  </form>

</div>

</body>
</html>