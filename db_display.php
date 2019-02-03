<!DOCTYPE html>
<html>
<head>
 <title>Online Banking System</title>
 <style>
	table {
		border: 1px solid black;
		width: 100%;
		color: #7294cc;
		font_family: monospace;
		font-size:25px;
		text-align: left;
		}
	th {
     	 border: 1px solid black;		
		 background-colour: #7294cc;
		 color:blue;
		
	   } 
	tr {
		    border: 1px solid black;
	   }	
    td {
		    border: 1px solid black;
	   }		   
 </style>
</head> 
<body>
<h1 style="background-color:#7294cc;color:#003399; font-family:verdana; text-align:center; font-size:500%;">All System Users</h1>
<table>
 <tr>
	<th>Id</th>
	<th>Role</th>
	<th>UserName</th>
	<th>Password</th>
	<th>Mobile</th>
	<th>Email</th>
	<th>DOB</th>
	<th>Address</th>
 </tr>
 <?php
	include "db_connect.php";
	$sql = "SELECT * FROM System_User";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["SU_Id"]. "</td><td>" . $row["SU_Role"]. "</td><td>" . $row["SU_UserName"]. "</td><td>" . $row["SU_Password"]. " </td><td>" . $row["SU_Mobile"]. "</td><td>" . $row["SU_Email"]. "</td><td>" . $row["SU_DOB"]. "</td><td>" . $row["SU_Address"]. "</td><td>";
    }
	echo "</table>";
} else {
    echo "0 results";
}

 ?>
 <br>
 <form action="db_search.php">
 <br><style ="text-size:250%; text-color:#7294cc"></style>
 Please Enter the UserName to search for:<br>
 <input style="background-color:#ffffff;color:#7294cc; font-family:Garamond; text-align:left; font-size:150%;" type="text" name="keyword"><br>
 <input style="background-color:#ffffff;color:#7294cc; font-family:Garamond; text-align:center; font-size:150%;" type="submit" value="Submit">
</form>
 