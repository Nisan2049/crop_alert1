<?php
include('connect.php');
$lid=12341;
$disease="disease";
$problem="problem";
$symptom="symptom";
$sql="INSERT INTO problem(landid,disease,problem,symptom)VALUES('{$lid}','{$disease}','{$problem}','{$symptom}')"; 
   
  if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }   
 
   mysql_close($con);
?>