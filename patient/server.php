<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'test');
	//$db = mysqli_connect('localhost:3306', 'joaxlomy_login', '12345678', 'joaxlomy_survey');
	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['fullname'];
		$address = $_POST['address'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $date = $_POST['date'];
		$bcenter = $_POST['bcenter'];
		$place = $_POST['otherAnswer'];
	  $q1 =	$_POST['optradio'];
	  $q2 =	$_POST['optradio1'];
	  $q3 =	$_POST['optradio2'];
	  $q4 =	$_POST['optradio3'];
	  $q5 =	$_POST['optradio4'];
	  $q6 =	$_POST['optradio5'];
	  $q7 =	$_POST['optradio6'];



		$sql = "INSERT INTO info (fname, address,age,sex,visit_date,q1,q2,q3,q4,q5,q6,q7,b_center,place_travelled)
					 VALUES
								 ('$name', '$address', '$age', '$gender','$date', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$bcenter', '$place' )";


		$result = mysqli_query($db, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($db), E_USER_ERROR);


		$_SESSION['message'] = "Address saved"; 
		if ($q1 == 1 || $q2 ==1 || $q3 ==1 || $q4 ==1 || $q5 ==1 || $q6 ==1 || $q7 ==1)
		{
			header('location: quarantine.php');
		}

		else {
			header('location: proceed.php');
		}
	
	}