<?php
function connectDB()
{
	$host="localhost";
	$db="cadestu";
	$user="phpCathy";
	$pwd="password";

	$conn=new mysqli($host, $user, $pwd, $db);
	if($conn->connect_error) die("DB connection fatal Error");
	else
		return $conn;
}
?>