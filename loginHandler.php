<?php
require_once("sqlSts.php");

$conn=connectDB();
$email=$_POST['email'];
$pwd=$_POST['password'];

$query="SELECT email, password from admin WHERE email=\"$email\" AND password =SHA1(\"$pwd\")";
	$result=$conn->query($query);
	if(!$result) die("fatal error");

$rows=$result->num_rows;


if($rows!=0)
{
	ob_start();
	session_start();
	$_SESSION['admin']='admin';
	$_SESSION['email']=$email;
	header("Location: ./admin/admin.php");
	echo "login in successful";
}
 else
 {
 	header("Location: loginForm.php?msg=Please try again");
 }
ob_end_flush();
?>
