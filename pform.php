<html>
<head>
<title>Patient Admission</title>
</head>
 
<body style="background-color:powderblue;">

<form action = "pupload.php" method = "post">
<h3>Patient Admission form</h3>

 
<table align="left" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="first_name" maxlength="30"/>
<br>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="last_name" maxlength="30"/>
<br>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<input type="date" name="bday">
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="emailid" maxlength="100" /></td>
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
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="gender" value="Male" />
Female <input type="radio" name="gender" value="Female" />
</td>
</tr>
 <!----- Symptoms---------------------------------------------------------->
<tr>
<td>Symptoms <br /><br /><br /></td>
<td><textarea name="symtoms" rows="6" cols="30"></textarea></td>
</tr>
<!----- Department to admit ---------------------------------------------------------->
<td><strong>Department of admission</strong></td>
    <td><select name="dadmission" size="1" id="dadmission">
  <option value="">--select--</option>
  <option>Acupuncture</option>
  <option>Cardiology</option>
  <option>Casualty/Emergency</option>
  <option>Clinical Psychology</option>
  <option>Dentistry</option>
  <option>Dermatology (Skin)</option>
  <option>ENT</option>
  <option>General Surgery</option>
  <option>Gynaecology</option>
  <option>Psychiatry</option>
  
</select></td>

<!----- Doctor name ---------------------------------------------------------->
<td><strong>Department of admission</strong></td>
    <td><select name="dadmission" size="1" id="blood">
  <option value="">--select--</option>
  <option>Name1</option>
  <option>Name2</option>
  <option>Name3</option>
  <option>Name4</option>
  <option>Namey5</option>
  <option>Namey6 (Skin)</option>
  <option>Name7</option>
  <option>Name8y</option>
  <option>Name9y</option>
  <option>Name10</option>


<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="city" maxlength="30" />
<br>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="pincode" maxlength="6" />
<br>
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="state" maxlength="30" />
<br>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td><strong>COUNTRY</strong></td>
<td><input type="text" name="country" value="India" readonly="readonly" /></td>
</tr>
<!----- Occupation ---------------------------------------------------------->
<tr>
<td> <strong>Occupation</strong></td>
<td><input type="text" name="occupation" /></td>
</tr>
<!----- Blood Group ---------------------------------------------------------->
<td><strong>Blood Group *</strong></td>
    <td><select name="blood" size="1" id="blood">
  <option value="">--select--</option>
  <option>O+</option>
  <option>O-</option>
  <option>A+</option>
  <option>A-</option>
  <option>B+</option>
  <option>B-</option>
  <option>AB+</option>
  <option>AB-</option>
  <option>UNKNOWN</option>
</select></td>


<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>



 

</form>
 
</body>
</html>
