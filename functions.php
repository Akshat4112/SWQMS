<?php
$con = mysqli_connect('localhost', 'root', '', 'swqms') or die('Cannot conncet to database.');

function signin()
{
	echo $email;
	echo $password;
}
function register()
{	
	global $con;
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];

	$query="insert into users values('$fullname','$email','$password','$cpassword')";
	$runquery=mysqli_run($query);
}
?>