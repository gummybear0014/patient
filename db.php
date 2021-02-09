

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

      // If there are results returned, prepare combo-box
    
else{


  $query = "SELECT * FROM company";
  mysqli_query($con, $query) or die ('Error querying database');
  
  $result = mysqli_query($con, $query);
  
  $row = mysqli_fetch_array($result);


  $query1 = "SELECT * FROM laboratory";
  mysqli_query($con, $query1) or die ('Error querying database');
  
  $result1 = mysqli_query($con, $query1);
  
  $row1 = mysqli_fetch_array($result1);




	if (isset($_POST['save'])) {
		$tran_fname = $_POST['fname'];  
    $tran_lname = $_POST['lname'];
		$company = $_POST['company'];  
     $vessel = $_POST['vessel'];
    $street = $_POST['street'];
    $brgy = $_POST['brgy'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $nationality = $_POST['nationality'];
    $passport = $_POST['passport'];
    $gender = $_POST['gender'];
    $bdate = $_POST['bdate'];
    $contact = $_POST['contact'];
    $result = $_POST['result'];
    $OR = $_POST['OR'];
    $swab = $_POST['swab'];
    $payment = $_POST['payment'];
    $laboratory = $_POST['laboratory'];
    $remarks = $_POST['remarks'];
    $TCREATED = date("H:i:s");
    $UCREATED= $_SESSION['username']; 

  $strsql = "INSERT INTO transactions( tran_fname, tran_lname, comp_id, tran_vessel, tran_street, tran_brgy, tran_city, tran_province, tran_nationality, tran_passport, tran_gender, tran_bdate, tran_contact, tran_sendto, tran_OR, tran_swab, tran_payment, lab_id, tran_remarks,Tcreated, UCREATED) 
             VALUES                     ( '$tran_fname',  '$tran_lname', $company,   '$vessel',       '$street',        '$brgy','$city', '$province' ,'$nationality','$passport','$gender','$bdate','$contact','$result','$OR',$swab,'$payment',$laboratory,'$remarks', '$TCREATED', '$UCREATED') ";





  $result3 = mysqli_query($con, $strsql) or trigger_error("Query Failed! SQL: $strsql - Error: ".mysqli_error($con), E_USER_ERROR);

  header('location: main.php');

 




}
}



?>










