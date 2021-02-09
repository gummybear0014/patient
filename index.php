<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<!--<link rel="stylesheet" href="css/style.css" /> -->
<link rel="stylesheet" href="css/login.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM 'users' WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: main.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
				}
    }else{
?>
<!--
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
	-->
<div class="content form">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-md-6 contents">
			<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="form-block">
					<div class="mb-4">
						<h3>Sign in to <strong>MAGCOOP</strong></h3>
						<p class="mb-4">Patient Information System</p>
					</div>
						<form action="#" method="post" name="login">
							<div class="form-group first">
							
								<input type="text" class="form-control"name="username" id="username" placeholder="User Name" required>
								</div>
								<div class="form-group last mb-4">
							
								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							</div>

								<input type="submit" type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">
					</div>
						</form>
					</div>
				</div>
			</div>
			</div>
			</div>
</div>
</div>
<?php } ?>
</body>
</html>
