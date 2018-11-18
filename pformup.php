<?php
include("config.php");
require_once 'navi/pnav.php';
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
