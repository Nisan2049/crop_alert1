<?php
include('connect.php');
$landid=1234;
$result = mysql_query("SELECT p.disease,p.problem,p.symptom,l.landid FROM land l, problem p WHERE l.landid = p.landid and l.landid=12341");
while($row = mysql_fetch_array($result)) 
      {
           $longitude=$row['disease'];
           echo $longitude;
            
    }
   mysql_close($con);
  
?>