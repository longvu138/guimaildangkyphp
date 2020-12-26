<?php
if (isset($_POST["signup"])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$city    = $_POST["city"];
	$address1  = $_POST["address1"];
	$address2  = $_POST["address2"];
	$statecountry = $_POST["statecountry"];
	$Registration_date  = $_POST["Registration_date"];
	$phone  = $_POST["phone"];
	$zcodepcode  = $_POST["zcodepcode"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	if ($password != $confirmpassword) {
		echo "passs sai";
	} else {
		require_once "config.php";
		$sql = "INSERT INTO users (first_name, last_name, email, password,	registration_date,  user_level, address1, address2, city, state_country,  zcode_pcode, phone)
		VALUES ('$firstname', '$lastname', '$email', '$password','$Registration_date', '','$address1', '$address2','$city','$statecountry','$zcodepcode',$phone)";
		echo $sql;
		if (mysqli_query($conn, $sql)) {
			header("location:tks.php");
		} else {
			header("location:error.php");
		}
	}
}
