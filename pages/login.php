<?php
include('connect.php');

$username=$_POST['username'];
$password=$_POST['password'];
$name="";
$passwd="";
$result = mysql_query("SELECT * FROM users where rusername='{$username}'");
while(($row = mysql_fetch_array($result))>0)
      {
            $name= $row['rusername'] ;
            $passwd =$row['rpassword'];
            
    }
   mysql_close($con);
  if((strcmp($username,$name)===0)&&(strcmp($password,$passwd)===0))
  {
 
         echo "login successful";
      }
    else
    {
        
        echo"<p> please use your valid user Id and password </p>";
    }  

?>