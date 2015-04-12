<?php
session_start();
$loggedin=$_SESSION['loggedin'];
if($loggedin=="true")
{
	echo "Logged in as ".$_SESSION['Name'];
}

?>

    <h1> Welcome to dashboard <u> 
    
    <?php
    echo $_SESSION['Name']; 
    ?> 
	<br/></u><h1>

    <h2> <a href="index.php?id=logged">Click Here to continue</a>
      
      
