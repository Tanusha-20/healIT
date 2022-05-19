<?php 

 include("include/connection.php");

 if (isset($_POST['create'])) {
 	
 	$fname = $_POST['fname'];
 	$sname = $_POST['sname'];
 	$uname = $_POST['uname'];
 	$email = $_POST['email'];
 	$email = $_POST['phone'];
 	$phone = $_POST['phone'];
 	$gender = $_POST['gender'];
 	$country = $_POST['country'];
 	$password = $_POST['pass'];
 	$con_pass = $_POST['con_pass'];

 	$error = array();

 	if (empty($fname)) {

 		$error['ac'] = "Error Firstname";
 	}
 	else if(empty($sname)){
 		$error['ac'] = "Enter Surname";
 	}
 	else if(empty($uname)){
 		$error['ac'] = "Enter Username";
 	}
 	else if(empty($email)){
 		$error['ac'] = "Enter Email";
 	}
 	else if(empty($phone)){
 		$error['ac'] = "Enter Phone Number";
 	}
 	else if($gender==""){
 		$error['ac'] = "Select Your Gender";
 	}
 	else if($country==""){
 		$error['ac'] = "Select Your Country";
 	}
 	else if(empty($password)){
 		$error['ac'] = "Enter Password";
 	}
 	else if($con_pass != $password){
 		$error['ac'] = "Both password do not match";
 	}

 	if (count($error)==0) {
 		
 		$query = "INSERT INTO patient(firstname,surname,username,email,phone,gender,country,password,date_reg,profile) VALUES('$fname','$sname','$uname','$email','$phone','$gender','$country','$password',NOW(),'krina.jpg')";

 		$res = mysqli_query($connect,$query);

 		if($res) {
 			header("Location:patientlogin.php");
 		}
 		else {
 			echo "<script>alert('failed')</script>";
 		}
 	}
 }

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Patient Register</title>
</head>
<body style="background-image:url(img/backg.jpg); background-repeat: no-repeat; background-size:cover;">

	<?php
     include("include/header.php");
    
	  ?>

	  <div class="container-fluid">
	  	<div class="col-md-12">
	  		<div class="row">
	  			<div class="col-md-3">
	  				
	  			</div>
	  			<div class="col-md-6 my-2  mt-4 p-5  rounded my-3" style="background-color:#D3DEDC">
	  				<h5 class="text-center  my-2">Create Account</h5>

	  				<form method="post">
	  					<div class="form-group">
	  						<label>Firstname</label>
	  						<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname">
	  					</div>

	  					<div class="form-group">
	  						<label>Surname</label>
	  						<input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Surname">
	  					</div>

	  					<div class="form-group">
	  						<label>Username</label>
	  						<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
	  					</div>

	  					<div class="form-group">
	  						<label>Email</label>
	  						<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email">
	  					</div>

	  					<div class="form-group">
	  						<label>Phone</label>
	  						<input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number">
	  					</div>

	  					<div class="form-group">
	  						<label>Gender</label>
	  						<select name="gender" class="form-control">
	  							<option value="">Select Your Gender</option>
	  							<option value="Male">Male</option>
	  							<option value="Female">Female</option>
	  							<option value="Other">Other</option>
	  						</select>
	  					</div>

	  					<div class="form-group">
	  						<label>Country</label>
	  						<select name="country" class="form-control">
	  							<option value="">Select Your Country</option>
	  							<option value="USA">USA</option>
	  							<option value="Russia">Russia</option>
	  							<option value="India">India</option>
	  						</select>
	  					</div>

	  					<div class="form-group">
	  						<label>Password</label>
	  						<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
	  					</div>

	  					<div class="form-group">
	  						<label>Confirm Password</label>
	  						<input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Enter Phone Number">
	  					</div>
	  					<br>

	  					<input type="submit" name="create" class="btn btn-info" value="Create Account" >
                        <p>I already have an account <a href="patientlogin.php">Click here!</a></p>
	  					
	  				</form>
	  				
	  			</div>
	  			<div class="col-md-3">
	  				
	  			</div>
	  		</div>
	  	</div>
	  </div>

</body>
</html>