<?php

class user
{

	private $host="localhost";
	private $db="crop_alert";
	private $user="root";
	private $pass="";
	private $mysqli;

	//function connect_db(){
		function __construct(){
		$this->mysqli= new MySQLi($this->host,$this->user,$this->pass,$this->db);
		if($this->mysqli->error)
			echo $this->mysqli->error;
		//else
       // echo "<img src=\"green.png\">";
	  	//echo "Database Connected  Successfully";
	}


	 public function signup()
 {
$fn=$_POST['name'];
$em=$_POST['email'];
$un=$_POST['username'];
$pd=$_POST['pwd'];
$cn=$_POST['countryname'];
$mn=$_POST['mobileno'];

$sql="INSERT INTO users(name,email,rusername,rpassword,Country,phone)
					VALUES('$fn','$em','$un','$pd','$cn','$mn')";

$this->mysqli->query($sql);
if($this->mysqli->error)
	{
		echo "An error occured while handling your query";
	}
	else
	{
		echo "Insertion Succeed";
		header("location:./index.php?id=2");
	}
}

function login(){
session_start();

$uname=$_POST['Username'];
$password=$_POST['pwd'];
$sql="SELECT Name FROM users WHERE rusername='$uname' AND rpassword='$password'";

$res=$this->mysqli->query($sql);
$user=$res->fetch_array(MYSQLI_ASSOC);
print_r($user);
if($res->num_rows>0)
{
		$_SESSION['loggedin']="true";
		$_SESSION['Name']=$user['Name'];
		
	echo "Login success";

	header("location:./dashboard.php");
}
	else
		echo "<br><font color=\"#FF0000\">Invalid username or password</font>";

}
 function logout()
 {

 session_destroy();
 }

 function get_users()
 {
 	$sql = "SELECT * FROM domain_users";
 	$res = $this->mysqli->query($sql);
 	$data = array();
 	while($row = $res->fetch_array(MYSQLI_ASSOC)){
 	$data[] = $row;
 	}
 	//print_r($data);
 	return $data;
 }

 	function delete_user($id) {
		$qDelete = "DELETE FROM  domain_users WHERE id='$id'";

         $this->mysqli= new MySQLi($this->host,$this->user,$this->pass,$this->db);
	   //	$connection = mysql_connect($this->HOST, $this->USERNAME, $this->PASSWORD);

        $res=$this->mysqli->query($qDelete);

		return mysql_error();


	}
	function report(){
$disease=$_POST['dis'];
$problem=$_POST['pro'];
$symptom=$_POST['sym'];
$place="place";
$precau="precaution";


$sql="INSERT INTO problem(landid,disease,problem,symptom,precaution)
					VALUES(1234,'$disease','$problem','$symptom','$precaution')";

$this->mysqli->query($sql);
if($this->mysqli->error)
	{
		echo "An error occured while handling your query";
	}
	else
	{
		echo "Insertion Succeed";
		header("location:./index.php?id=logged");
	}


	}
	 function get_recent()
 {
 	$sql = "SELECT * FROM problem";
 	$res = $this->mysqli->query($sql);
 	$data = array();
 	while($row = $res->fetch_array(MYSQLI_ASSOC)){
 	$data[] = $row;
 	}
 	//print_r($data);
 	return $data;
 }
}


/*function login{$username,$password){


}
}*/
?>