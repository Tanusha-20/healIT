<?php 

session_start();
include("include/connection.php");

if (isset($_POST['login'])) {
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$error = array();

	if(empty($username)){
		$error['admin']= "Enter Username";
	}
	else if(empty($password)){
		$error['admin']= "Enter Password";
	}

	if(count($error)==0){

		$query ="SELECT * FROM admin where username='$username' AND password='$password'";

		$result = mysqli_query($connect,$query);

		if (mysqli_num_rows($result)== 1) {
			echo "<script>alert('You have logged in as Admin')</script>";

			$_SESSION['admin']=$username;

			header("Location:admin/index.php");
			exit();
		}
		else {

			echo "<script>alert('Invalid username or password')</script>";
		}
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
</head>
<body style="background-image: url(img/backg.jpg); background-repeat: no-repeat; background-size: cover;">
 	<div class="col-md-12">

<?php
 include("include/header.php"); 
 ?>

 <div class="container">
 		<div class="row">
 			<div class="col-md-3"></div>
 			<div class="col-md-6 mt-4 p-5  rounded" style="background-color:#D3DEDC">
 				<img src="img/admin.jpg" class="col-md-12" style="height: 100px; width: 90px; margin-left: 40% ;">
 				
 				<form method="post" class="my-2">

 					<div>
 						<?php
                           if (isset($error['admin'])) {
                           	 $sh= $error['admin'];

                           	 $show="<h4 class='alert alert-danger' >$sh</hr>";
                           }
                           else {
                           	$show = "";
                           }
                           echo $show;
                           
 						  ?>

 					</div>

 					<div class="form-group">
 						<label>Username</label>
 						<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
 					</div>

 					<div class="form-group">
 						<label>Password</label>
 						<input type="password" name="pass" class="form-control" placeholder="Enter Password">
 					</div>
 					<input type="submit" name="login" class="btn btn-success" style="margin-top: 20px;" value="Login">
 				</form>
 			</div>
 			<div class="col-md-3"></div>
 		</div>
 	</div>
 </div>

</body>
</html>