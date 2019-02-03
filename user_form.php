<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <style>
 input{
   margin:10px;
   width:100%;
	padding: 12px 72px;
    margin: 8px 0;
    box-sizing: border-box;
	font-size:60%;   
} 
form{
font-size:200%;
margin:50px;
}
</style>
</head>
<body style="align:center; font-family:verdana">
<h1 style="background-color:#7294cc;color:#003399; font-family:verdana; text-align:left; font-size:500%;">Register New System User</h1>
 <form action="db_user_reg.php" method="POST">
  <table>
   <tr>
    <td>Id:</td>
    <td><input type="number" name="Id" required ></td>
   </tr>
   <tr>
    <td>Role:</td>
    <td><input type="text" name="Role" required></td>
   </tr>
   <tr>
    <td>UserName:</td>
    <td><input type="text" name="UserName" required></td>
   </tr>
   <tr>
    <td>Password:</td>
    <td><input type="number" name="Password" required></td>
   </tr>
   <tr>
    <td>Mobile:</td>
    <td><input type="number" name="Mobile" required></td>
   </tr>
   <tr>
    <td>Email:</td>
    <td><input type="email" name="Email" required></td>
   </tr> 
   <tr>
    <td>DOB:</td>
    <td><input type="date" name="DOB" required></td>
   </tr>
   <tr>
    <td>Address:</td>
    <td><input type="text" name="Address" required></td>
   </tr>
   <tr style="align:center; padding:50px" >
    <td><br><input type="Submit" value="Submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>
