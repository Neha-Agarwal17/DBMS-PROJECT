<?php
	$Id=$_POST['Id'];
	$Role=$_POST['Role'];
	$UserName=$_POST['UserName'];
	$Password=$_POST['Password'];
	$Mobile=$_POST['Mobile'];
	$Email=$_POST['Email'];
	$DOB=$_POST['DOB'];
	$Address=$_POST['Address'];
	if (!empty($Id) || !empty($Role) || !empty($UserName) || !empty($Password) || !empty($Mobile) || !empty($Email) || !empty($DOB) || !empty($Address) )
	{
		include "db_connect.php";
		$INSERT= "INSERT INTO System_User(SU_Id,SU_Role,SU_UserName,SU_Password,SU_Mobile,SU_Email,SU_DOB,SU_Address) VALUES(?,?,?,?,?,?,?,?)";
		$stmt = $mysqli->prepare($INSERT);
		//var_dump($stmt);
		$stmt->bind_param("issiisis",$Id,$Role,$UserName,$Password,$Mobile,$Email,$DOB,$Address);
		$stmt->execute();
		echo "New record inserted successfully";
		$stmt->close();
	}
	else{
			echo "All fields are required ";
			die();
		}
?>
 