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
<h1 style="background-color:#7294cc;color:#003399; font-family:verdana; text-align:left; font-size:500%;">Register new Customer</h1>
 <form action="cu_reg.php" method="POST">
  <table>
   <tr>
    <td>CU_Id:</td>
    <td><input type="number" name="Id" required ></td>
   </tr>
   <tr>
    <td>Firstname:</td>
    <td><input type="text" name="firstname" required></td>
   </tr>
   <tr>
    <td>Lastname:</td>
    <td><input type="text" name="lastname" required></td>
   </tr>
   <tr>
    <td>LoginId:</td>
    <td><input type="text" name="loginid" required></td>
   </tr>
   <tr>
    <td>AccPassword:</td>
    <td><input type="text" name="accpassword" required></td>
   </tr>
   <tr>
    <td>AccStatus:</td>
    <td><input type="text" name="accstatus" required></td>
   </tr> 
   <tr>
    <td>City:</td>
    <td><input type="text" name="city" required></td>
   </tr>
   <tr>
    <td>State:</td>
    <td><input type="text" name="state" required></td>
   </tr>
   <tr>
    <td>AccOpenDate:</td>
    <td><input type="date" name="accopendate" required></td>
   </tr>
   <tr>
    <td>AccNumber:</td>
    <td><input type="number" name="accno" required></td>
   </tr>
   <tr style="align:center; padding:50px" >
    <td><br><input type="Submit" value="Submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>
