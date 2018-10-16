<html>
<head>
<title>Blood Donour form</title>

</head>
 
<body>
<h3>Blood Donation Form</h3>

 
<table align="left" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
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
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" />
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td><strong>COUNTRY</strong></td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
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



<table>
<!----- Question Answers ----------------------------------------------------------->
<!----- Question 1 ----------------------------------------------------------->
<tr>
<td>Did you ever donate blood before ?</td>
<td>  </td>
<td>  </td>
<td>  
YES <input type="radio" name="q1" value="yes" />
NO <input type="radio" name="q1" value="no" />
</td>
</tr>
<!----- Question 2 ----------------------------------------------------------->
<tr>
<td>Do you suffer of any diseases?</td>
<td>  </td>
<td>  </td>
<td>  
YES <input type="radio" name="q2" value="yes" />
NO <input type="radio" name="q2" value="no" />
</td>
</tr>

<!----- Question 3 ----------------------------------------------------------->
<tr>
<td>Do you have allergies?</td>
<td>  </td>
<td>  </td>
<td>  
YES <input type="radio" name="q3" value="yes" />
NO <input type="radio" name="q3" value="no" />
</td>
</tr>

<!----- Question 4 ----------------------------------------------------------->
<tr>
<td>Do you take medication?</td>
<td>  </td>
<td>  </td>
<td>  
YES <input type="radio" name="q4" value="yes" />
NO <input type="radio" name="q4" value="no" />
</td>
</tr>


 </table>

</form>
 
</body>
</html>