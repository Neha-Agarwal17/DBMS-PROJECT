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
<h1 style="background-color:#7294cc;color:#003399; font-family:verdana; text-align:center; font-size:500%;">All Customers</h1>
<table>
 <tr>
	<th>CU_Id</th>
	<th>firstname</th>
	<th>lastname</th>
	<th>loginid</th>
	<th>accpassword</th>
	<th>accstatus</th>
	<th>city</th>
	<th>state</th>
	<th>accopendate</th>
	<th>accno</th>
 </tr>
 <?php
	include "db_connect.php";
	$sql = "SELECT * FROM customers";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["CU_Id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["loginid"]. " </td><td>" . $row["accpassword"]. "</td><td>" . $row["accstatus"]. "</td><td>" . $row["city"]. "</td><td>" . $row["state"]. "</td><td>" . $row["accopendate"]. "</td><td>" . $row["accno"] . "</td></tr>";
    }
	echo "</table>";
} else {
    echo "0 results";
}

 ?>
 <br>
 </body>
</html> 