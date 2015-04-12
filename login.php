<?php
include ('users.php');
$o=new user();
if(isset($_POST['SignIn']))
{
  $o->login();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
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
  <h1>Login</h1>
</div>
  <form role="form" class="col-sm-8" id="Login" method="POST">
    <div class="form-group ">
      <label for="Name">Username:</label>
      <input type="Name" class="form-control" name="Username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" name="SignIn" class="btn btn-default">Submit</button>
  </form>

</div>

</body>
</html>
