<?php
// include 'users.php';

if($_GET==null){
header("location:./index.php?id=0");
if(session_start()==true){
 header("location:./index.php?id=logged"); 
}
}
$a=$_GET['id'];
echo $a;
if($a!="0" && $a!="1" && $a!="2"){
session_start();
$loggedin=$_SESSION['Name'];
}
$a=$_GET['id'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Crop Alert </title>
<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <div class="col-sm-12" style="background-color:lavender;">
      <h2>Crop Alert</h3>
    </div>

    <div class="col-sm-4" style="background-color:lavender;">
                                           

  <div class="list-group">
  <a href="#" class="list-group-item active">Home</a>
  <a href="#" class="list-group-item">Pesticide</a>
  <a href="#" class="list-group-item">Insecticide</a>
</div>
  <ul class="list-group">
  <li class="list-group-item list-group-item-info">Latest News</li>
  <li class="list-group-item list-group-item-info">first item </li>
  <li class="list-group-item list-group-item-info">Third item</li>
  <li class="list-group-item list-group-item-info">Fourth item</li>
</ul>

<div class="list-group">
  <a href="#" class="list-group-item ">First item</a>
  <a href="#" class="list-group-item ">Second item</a>
  <a href="#" class="list-group-item active">Third item</a>
</div>
    </div>
  


  <div class="col-sm-8" style="background-color:lavenderblush;">
  <div class="list-group">
    <?php 
if ($a!="logged"){?>
  <a href="./index.php?id=1" class="list-group-item active">Register</a>
  
  <a href="./index.php?id=2" class="list-group-item">Login</a>
  <?php } else{?>
  <h3>You are Logged In as <?php echo $loggedin ?></h3>
  <a href="index.php?id=0">Log Out</a>
  <br/>
  <a href="index.php?id=report">Report a Problem</a>
<?php
  }
  ?>
  <div class="col-sm-12" style="background-color:lavenderblush;">
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var map;
var myCenter=new google.maps.LatLng(26.5333,86.7333);
function breakout_of_frame()
{
  // see http://www.thesitewizard.com/archive/framebreak.shtml
  // for an explanation of this script and how to use it on your
  // own website
  if (top.location != location) {
    top.location.href = document.location.href ;
  }
}

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:7,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(event.latLng);
  });
}

function placeMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map,
  });
  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body onload="breakout_of_frame()">



<?php

if ($a==1){

include('./SignUp.php');
  $a=0;
?>
<!-- <frame>
<object data='SignUp.php' height='500' type='text/html' width='380' align="left">
</object>
</frame> -->
<?php
}
elseif ($a==2) {
include('./login.php');
  $a=0

  ?>
<!-- <frame>
<object data='login.php' height='500' type='text/html' width='380' align="left">
</object>
</frame> -->

<?php
} 
elseif ($a=="report") {
  include('./problem.php');
  $a=0


  ?>
<!-- <frame>
<object data='problem.php' height='500' type='text/html' width='600' align="left">
</object>
</frame> -->
<?php
} 
else{
?>
<div id="googleMap" style="width:500px;height:380px;">
  <?php
}?>

</div>

</body>
    
  </div >
   
 
</div>
</div>


  </div>	
  <div class="col-sm-12 container-fluid text-center">
    
 <h1>Recent Posts</h1>
 <?php
 include ('users.php');
$o = new user();
$data=$o->get_recent();
?>
<table border="3" width="960px" cellpadding="20px" cellspacing="20px" >
  <tr>
  <td><h3>Disease</h3></td>
   <td><h3>symptom</h3></td>
    <td><h3>landid</h3></td>
  </tr>
  <?php for($i=1;$i!=5;$i++){ ?>
<tr>
<td><?php echo $data[$i]['disease']."<br/>"; ?></td>
<td><?php echo $data[$i]['symptom']."<br/>"; ?></td>
<td><?php echo $data[$i]['landid']."<br/>"; ?></td>
</tr>
<?php } ?>

 </table>




</div>
	
</div>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
