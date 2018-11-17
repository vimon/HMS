<html>
<?php
require_once 'navi/pnav.php';
?>

<head>
<title>Patient Admission</title>
</head>
 
<body style="background-color:powderblue;">

<form action = "" method = "post">
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
    <td><select name="dep" size="1" id="dep">
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
<td><strong>Doctor Name</strong></td>
<?php
include("config.php");

$query1="select dname from doctor";
$result1 = mysqli_query($conn,$query1);

if (!$result1) {
    die('Invalid query: ' . mysql_error());
}
?>
<td><select name="dname" size="1" id="dname"> 
    <option value="0">Please Select</option>
        <?php
            while($row = mysqli_fetch_array($result1,MYSQLI_ASSOC))
            {
            ?>
            <option value = "<?php echo($row['dname'])?>" >
                <?php echo($row['dname']) ?>
            </option>
            <?php
            }               
        ?>
        </select></td>

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

<!----- Ward number ---------------------------------------------------------->
<td><strong>Ward number *</strong></td>
    <td><select name="wno" size="1" id="wno">
  <option value="">--select--</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>8</option>
  <option>9</option>
  <option>General</option>
</select></td>


<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>


<?php
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$bday=$_POST["bday"];
$emailid=$_POST["emailid"];
$mobnum=$_POST["mobnum"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$city=$_POST["city"];
$pincode=$_POST["pincode"];
$state=$_POST["state"];
$country=$_POST["country"];
$occupation=$_POST["occupation"];
$blood=$_POST["blood"];
$dep=$_POST["dep"];
$dname=$_POST["dname"];
$wno=$_POST["wno"];
$pid="";
$symtoms=$_POST["symtoms"];
$query="insert into ptable values('$pid','$first_name','$last_name','$bday','$emailid','$mobnum','$gender','$address','$city','$pincode','$state','$country','$occupation','$blood','$dep','$dname','$wno','$symtoms')";
$result = mysqli_query($conn,$query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
echo "<br>";
echo "Data Saved in ptable";

mysql_close($conn);
?>
</form>
 
</body>
</html>
