<?php
	
	$fName = $_POST['inputFirstName'];
	$lName = $_POST['inputLastName'];
	$email = $_POST['inputEmail'];
	$password = $_POST['inputPassword'];

	require 'require/databasecon.php';

	$rslt = mysqli_query($cn, "select count(email) exist from clients where email='$email'");
	$count = mysqli_fetch_assoc($rslt);
	if ($count['exist']>0) {
		mysqli_close($cn);
		header('location:signup_form.php?msg=mailexist');
	}else{
		 $rslt = mysqli_query($cn, "insert into clients(first_name, last_name, email, password) values('$fName', '$lName', '$email', '$password')");
		 mysqli_close($cn);
		 header('location:signup_form.php?user='.$fName);

	}


	