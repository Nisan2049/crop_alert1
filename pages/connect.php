<?php

// Create connection
  $con = mysql_connect("localhost","root","");
    if (!$con)
      {
          die('Could not connect: ' . mysql_error());
      }
$db=mysql_select_db("crop_alert", $con);
if(!$db)
{
	die("couldnot connect to database");
}

?>