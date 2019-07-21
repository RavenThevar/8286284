<?php
$title = "Login / Register - DMW";
require('header.php');

$con = new mysqli("localhost","root","","car");
$stmt = $con->prepare($sql = "SELECT title1, title2, desc1, desc2, button1, button2 FROM landing"); 
$stmt -> execute();
$stmt ->bind_result($title1, $title2, $desc1, $desc2, $button1, $button2);
$stmt ->fetch(); 
?>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<div class="container-fluid">
<div class="row"> 

<div class="col-lg-6" style="background-color: white;">
  <h1 class="display-1"><?php print"$title1";?></h1>
  <p class="lead"><?php print"$desc1";?></p>
  
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Login">
    <?php print"$button1";?>
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="Login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php print"$title1";?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form name="login" method="POST">
          <div class="input-group mb-3">
    		<div class="input-group-prepend">
     		 	<span class="input-group-text" style="background-color: brown;"><font color="white">Username:</font></span>
   			 </div>
   		 	<input type="text" class="form-control" name="user"/>
 		  </div>

 		  <div class="input-group mb-3">
    		<div class="input-group-prepend">
     		 	<span class="input-group-text" style="background-color: brown;"><font color="white">Password:</font></span>
   			 </div>
   		 	<input type="password" class="form-control" name="pass"/>
 		  </div>
        
         <div class="custom-control custom-checkbox mb-3">
      		<input type="checkbox" class="custom-control-input" id="customCheck" name="remember"/>
      		<label class="custom-control-label" for="customCheck">Remember me?</label>
    	</div>

        </div>

        <input type="hidden" name="secret" value="true"/>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" style="background-color: brown;"><?php print"$button1";?></button>
        </div>
        </form>
      </div>
    </div>
  </div>
 </div>

 <div class="col-lg-6" style="background-color: black;">
  <h1 class="display-1"><font color="white"><?php print"$title2";?></font></h1>
  <p class="lead"><font color="white"><?php print"$desc2";?></font></p>
  
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Register">
    <?php print"$button2";?>
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="Register">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php print"$title2";?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form name="register" method="POST">

 		  <div class="input-group mb-3">
    		<div class="input-group-prepend">
     		 	<span class="input-group-text" style="background-color: brown;"><font color="white">First Name:</font></span>
   			 </div>
   		 	<input type="text" class="form-control" name="fname">
 		  </div>

 		  <div class="input-group mb-3">
    		<div class="input-group-prepend">
     		 	<span class="input-group-text" style="background-color: brown;"><font color="white">Last Name:</font></span>
   			 </div>
   		 	<input type="text" class="form-control" name="lname">
 		  </div>

 		  <div class="input-group mb-3">
    		<div class="input-group-prepend">
     		 	<span class="input-group-text" style="background-color: brown;"><font color="white">Age:</font></span>
   			 </div>
   		 	<input type="text" class="form-control" name="age">
 		  </div>

 		  <div class="input-group mb-3">
    		<div class="input-group-prepend">
     		 	<span class="input-group-text" style="background-color: brown;"><font color="white">Email:</font></span>
   			 </div>
   		 	<input type="text" class="form-control" name="email">
 		  </div>

          <div class="input-group mb-3">
    		<div class="input-group-prepend">
     		 	<span class="input-group-text" style="background-color: brown;"><font color="white">Enter Username:</font></span>
   			 </div>
   		 	<input type="text" class="form-control" name="user2">
 		  </div>

 		  <div class="input-group mb-3">
    		<div class="input-group-prepend">
     		 	<span class="input-group-text" style="background-color: brown;"><font color="white">Enter Password:</font></span>
   			 </div>
   		 	<input type="password" class="form-control" name="pass2">
 		  </div>
        	
		  <div class="input-group mb-3">
    		<div class="input-group-prepend">
     		 	<span class="input-group-text" style="background-color: brown;"><font color="white">Confirm Password:</font></span>
   			 </div>
   		 	<input type="password" class="form-control" name="cpass">
 		  </div>

         <div class="custom-control custom-checkbox mb-3">
      		<input type="checkbox" class="custom-control-input" id="customCheck2" name="remember">
      		<label class="custom-control-label" for="customCheck2">Login & Remember me?</label>
    	</div>

        </div>
        
        <input type="hidden" name="secret2" value="true"/>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" style="background-color: brown;"><?php print"$button2";?></button>
        </div>
        </form>
      </div>
    </div>
  </div>
 </div>

</div>
</div>

<div class="row">
  
<div class="col-lg-6">

<?php
$problem = false;
if(empty($_POST['user']) && isset($_POST['secret']))
{
  $problem = true;
  print"<br/><font color='red'>Your username is empty.!</font>";
}

if (empty($_POST['pass']) && isset($_POST['secret'])) 
{
  $problem = true;
  print"<br/><font color='red'>Your password is empty.!</font>";
}

if($problem == false && isset($_POST['secret']))
{
  $hook1 = $_POST['user'];
  $hook2 = $_POST['pass'];
  $con = new mysqli("localhost","root","","car");
  $stmt = $con->prepare($sql = "SELECT username FROM user WHERE username = '$hook1' AND password = '$hook2'");
  $stmt -> execute();
  $stmt -> bind_result($userA);
  $stmt -> fetch();

  if(empty($userA) && isset($_POST['secret']))
  {
    print"<br/><font color='red'>No such user found on our database.! Try again.!</font>";
  }
  else
  {
    $_SESSION['transfer'] = $userA;
    $_SESSION['check'] = true;
    print"<br/><font color='blue'>Welcome! You are now logged in as: $userA</font>";
  }
}



?>
</div>


<div class="col-lg-6">
<?php

$problem2 = false;

if(empty($_POST['fname']) && isset($_POST['secret2']))
{
  $problem2 = true;
  print"<br/><font color='red'>Your First Name is empty.!</font>";
}

if(empty($_POST['lname']) && isset($_POST['secret2']))
{
  $problem2 = true;
  print"<br/><font color='red'>Your Second Name is empty.!</font>";
}

if(empty($_POST['age']) && isset($_POST['secret2']))
{
  $problem2 = true;
  print"<br/><font color='red'>Your Age is empty.!</font>";
}

else if (isset($_POST['secret2']) && !is_numeric($_POST['age']))
{
  $problem2 = true;
  print"<br/><font color='red'>Only numbers are permitted for age.! Try again.!</font>";
}

if(empty($_POST['email']) && isset($_POST['secret2']))
{
  $problem2 = true;
  print"<br/><font color='red'>Your Email is empty.!</font>";
}

if(empty($_POST['user2']) && isset($_POST['secret2']))
{
  $problem2 = true;
  print"<br/><font color='red'>Your Username is empty.!</font>";
}

if(empty($_POST['pass2']) && isset($_POST['secret2']))
{
  $problem2 = true;
  print"<br/><font color='red'>Your Password is empty.!</font>";
}

if(empty($_POST['cpass']) && isset($_POST['secret2']))
{
  $problem2 = true;
  print"<br/><font color='red'>Your Confirm Password is empty.!</font>";
}

else if (isset($_POST['secret2']) && $_POST['cpass'] != $_POST['pass2'] )
{
    $problem2 = true;
    print"<br/><font color='red'>Your Confirm Password does not match your Password.!</font>";
}

if($problem2 == false && isset($_POST['secret2']))
{
  $con = new mysqli("localhost","root","","car");
  $stmt = $con->prepare($sql = "INSERT INTO user (username, password) VALUES (?,?)");
  $stmt -> bind_param("ss", $_POST['user2'], $_POST['cpass']);
  $stmt -> execute();

  $con = new mysqli("localhost","root","","car");
  $stmt = $con->prepare($sql = "INSERT INTO userinfo (email, fname, lname, age, username) VALUES (?,?,?,?,?)");
  $stmt -> bind_param("sssis", $_POST['email'], $_POST['fname'], $_POST['lname'], $_POST['age'], $_POST['user2'],);
  $stmt -> execute();

  $hook1 = $_POST['user2'];
  $hook2 = $_POST['cpass'];
  $con = new mysqli("localhost","root","","car");
  $stmt = $con->prepare($sql = "SELECT username FROM user WHERE username = '$hook1' AND password = '$hook2'");
  $stmt -> execute();
  $stmt -> bind_result($userA);
  $stmt -> fetch();

  $_SESSION['transfer'] = $userA;
  $_SESSION['check'] = true;
  print"<br/><font color='blue'>$userA, you are now a member of DMW.!</font>";
  print"<br/><font color='blue'>Welcome! You are now logged in as: $userA</font>";
}

?>
</div>

</div>


<?php
require('footer.php');
?>