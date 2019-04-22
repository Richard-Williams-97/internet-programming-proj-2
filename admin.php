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
// $username=$_POST['username'];
// $pwd=$_POST['password'];

// $query="SELECT * from tblusers WHERE UserLoginName=\"$username\" AND UserPW =SHA1(\"$pwd\")";
// 	$result=$conn->query($query);
// 	if(!$result) die("fatal error");


// echo "<h1>Welcome ".$result['Identity']." ".$result['Privilege']."</h1>";


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
              
             <label class="col-sm-2 col-form-label checkbox-inline"><input type="checkbox" name="name" value="access">change username:</label>
          		</br>
              <input type="name" class="form-control" name="chguser" onblur="validateNameMsg(this)">
            </div>

            <div class="form-group">
              <label class="col-sm-2 col-form-label checkbox-inline"><input type="checkbox" name="passy" value="access">change password:</label>
               </br>
           <input type="password" name="chgpass" class="form-control" onblur="validatePassMsg(this)">
            </div>


            <div class="form-group">
              <label class="col-sm-2 col-form-label checkbox-inline"><input type="checkbox" name="siteID" value="access">change siteID:</label> 
               </br>
             <input type="text" class="form-control" name="chgsiteID">
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
