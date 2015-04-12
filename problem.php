<?php
include('users.php');
$o = new user();
if(isset($_POST['rptpblm']))
{
$o->report();
}

?>
<!DOCTYPE html>
<head>
  <title>Problem</title>
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
  <h3>Specify the problem</h3>
</div>
  <form method="POST">
<div class="form-group">
  <label for="Disease">Disease:</label>
  <textarea class="form-control" rows="5" name="dis"></textarea>
</div>
<div class="form-group">
  <label for="Problem">Problem:</label>
  <textarea class="form-control" rows="5" name="pro"></textarea>
</div>
<div class="form-group">
  <label for="Symptoms">Symptoms:</label>
  <textarea class="form-control" rows="5" name="sym"></textarea>
</div>
<div class="form-group">
  <label for="image">Upload image:</label>
  {"status":1,"file":"http://placehold.it/50/B9E4FB/260b50","caption":"This image is 50x50 and uses colors #B9E4FB and #260b50","foreground":"B9E4FB","background":"260b50"}
  
</div>
<button type="submit" class="btn btn-default" name="rptpblm">Submit</button>


</form>
</body>
</html>