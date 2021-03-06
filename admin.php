<?php
ob_start();
session_start();

if(!isset($_SESSION['tblusers'])){
  echo "<h1>Illegal Access</h1>";
  exit(0);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <title>Admin page</title>
 </head>
 <body>
 <h1>Admin Access Center</h1>

 <?php

require_once("sqlsts.php");

$conn=connectDB();

$username=$_SESSION['UserLoginName'];
$pwd=$_SESSION['UserPW'];
$super=$_SESSION['IsSuperuser'];

$query="SELECT * from tblusers WHERE UserLoginName=\"$username\"";

	$result=$conn->query($query);
	if(!$result) die("fatal error");
	$row=$result->fetch_assoc();


echo "<h3>Welcome ".$row['Identity']." ".$row['UserLoginName']."</h3>";

 ?>

  <script type="text/javascript" src="./js/validation.js"></script>


  			<nav class="navbar ">
          <!-- Navbar content -->
              <a class="nav-item nav-link" href="./addUser.php">Add User</a>
              <a class="nav-item nav-link" href="./editUser.php">Edit User</a>
              <a class="nav-item nav-link" href="./deleteUser.php"">Delete User</a>
              <a class="nav-item nav-link" href="./logout.php">Logout</a>
              <a class="nav-item nav-link" href="./about.php">about</a>

            </nav>

          
  <form action="./changeform.php" class="form-inline" method="POST" onsubmit="return validate(this)">
            

            <div class="form-group" >
              
             <label class="col-sm-2 col-form-label checkbox-inline"><input type="checkbox" name="name" value="access" onclick="document.getElementById('chu').disabled=!this.checked;">change username:</label>
          		</br>
              <input id="chu" type="name" class="form-control" name="chguser"  disabled="disabled" onblur="validateNameMsg(this)">
            </div>

            <div class="form-group">
              <label class="col-sm-2 col-form-label checkbox-inline"><input type="checkbox" name="passy" value="access" onclick="document.getElementById('chp').disabled=!this.checked;">change password:</label>
               </br>
           <input id="chp" type="password" name="chgpass" class="form-control" disabled="disabled" onblur="validatePassMsg(this)">
            </div>


            <div class="form-group">
              <p>siteID:</p>
               <input type="checkbox" name="siteID" value="1">
            </div> 


        </br>
        <hr>
        <p id=errorNameMsg>username must be unique</p>
        <p id=errorPassMsg>password must be atleast 8 characters with uppercase, lowercase, and a digit </p>
        <hr>
        	<div >
          	<label class="col-sm-2 col-form-label">confirm Password:</label>
              <input type="text" class="form-control" name="confirm password">
              <input type="submit" class="btn btn-primary" value="submit changes">
          </div>

            </div>
          </form> 
    	 </div>

    	</table>


 </body>
</html>
