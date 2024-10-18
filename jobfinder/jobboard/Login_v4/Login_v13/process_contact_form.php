<?php
//database connection_aborted
$hostname="localhost";
$username="root";
$password="";
$dbname="jobs";
$conn=mysqli_connect($hostname,$username,$password,$dbname);

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];


$query="INSERT INTO profile(fullname,email,username,password,confirmpassword)VALUES('".$fullname."','".$email."','".$username."','".$password."','".$confirmpassword."')";
$send=mysqli_query($conn,$query);
if($send){
	echo"<script>window.alert('data inserted successfully')|</script>";
	header('refresh:0;url=index.html');
}else{
	echo"<script>window.alert('failed')</script>";
	header('refresh:0;url=index.html'); 
}






?>