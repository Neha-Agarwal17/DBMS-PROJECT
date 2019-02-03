<?php
	$Id=$_POST['Id'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$loginid=$_POST['loginid'];
	$accpassword=$_POST['accpassword'];
	$accstatus=$_POST['accstatus'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$accopendate=$_POST['accopendate'];
	$accno=$_POST['accno'];
	if (!empty($Id) || !empty($firstname) || !empty($lastname) || !empty($loginid) || !empty($accpassword) || !empty($accstatus) || !empty($city) || !empty($state) || !empty($accopendate) || !empty($accno))	{
		include "db_connect.php";
		$INSERT= "INSERT INTO System_User(CU_Id, firstname, lastname, loginid, accpassword, accstatus, city, state, accopendate, accno) VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmt = $mysqli->prepare($INSERT);
		var_dump($stmt);
		$stmt->bind_param("isssssssii",$Id, $firstname, $lastname, $loginid, $accpassword, $accstatus, $city, $state, $accopendate, $accno);
		$stmt->execute();
		echo "New record inserted successfully";
		$stmt->close();
	}
	else{
			echo "All fields are required ";
			die();
		}
?>
 