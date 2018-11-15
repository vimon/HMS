<html>
<head>
<title>Donation</title>
<?php
require_once 'navi/nav.php';
?>
</head>
 
<body style="background-color:powderblue;">

<form action = "dupdate.php" method = "post">
<h3>After Donation</h3>

 
<table align="left" cellpadding = "10">

<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="first_name" maxlength="30"/>
<br>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="mobnum" maxlength="10" />
<br>
(10 digit number)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<input type="date" name="bday">
</td>
</tr>

<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Update as Donated">
<input type="reset" value="Reset">
</td>
</tr>
</table>



 

</form>
 
</body>
</html>
