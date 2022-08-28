<?php
    $showAlert = false;
    $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{   
    include 'partials/_dbconnect.php';
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exist=false;
    if(($password == $cpassword) && $exist == false)
    {
         $sql = "INSERT INTO `users` ( `username`, `password`, `date`) VALUES ( '$username', '$password', current_timestamp())";
         $result = mysqli_query($conn , $sql);
         if ($result)
         {
             $showalert = true;
         }
         else
        {
            $showError = "Passwords do not match";
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Signup</title>
  </head>
  <body>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito&family=Permanent+Marker&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Faster+One&family=Righteous&display=swap" rel="stylesheet">
	<style>
		body
			{
				text-align:center;
				padding-top:50px;
			}
		h1
			{
				color:black;
				font-family:Righteous; 
				font-size:30px;
			}
		
		.input
			{
				width:310px;
				height:30px;
				border:1px solid lightgray;
			}
		#lbl
			{
				color:gray;
				font-family:nunito;
				font-size:13px;
			}
		.links
			{
				color:gray;
				font-family:nunito;
				font-size:13px;
				text-decoration:none;
			}
		#signup
			{
				background-color:black;
				width:300px;
				height:30px;
				border:1px solid black;
				border-radius:2.5px;
			}
		#signup:hover
			{
				background-color:#303030;
			}
	</style>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Your account is created and you can now login.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    }
    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Password did not match
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        }
    ?>
    <div class="container">
    <form action="/minipro/signup.php"method="post">
    <h1 class="text-center">TYPOMETER</h1>
    <input type="text" name="username" placeholder="User Name" class="input"> <br> <br>
		<input type="password" name="password" placeholder="Password" class="input"> <br> <br>
		<input type="password" name="cpassword" placeholder="Confirm Password" class="input"> <br> <br>
  </div>
  <p class="links">By creating an account, you agree our <a href="privacypolicy.html" style="color:black" class="links">Privacy Policy</a> </p> 
		<p class="links"> and <a href="terms.html" style="color:black" class="links">Terms of use</a> </p> 
		
    <button type="submit" class="btn btn-primary" style="background-color:black">Sign Up</button>
	
  

      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
</body>
</html>