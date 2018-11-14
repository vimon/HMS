<?php
include("config.php");
require_once 'navi/nav.php';
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
$weight=$_POST["weight"];
$height=$_POST["height"];
$lastdonation=$_POST["lastdonation"];
$q1_1=$_POST["q1_1"];
$q1_2=$_POST["q1_2"];
$q1_3=$_POST["q1_3"];
$q1_4=$_POST["q1_4"];
$q1_5=$_POST["q1_5"];
$q1_6a=$_POST["q1_6a"];
$q1_6b=$_POST["q1_6b"];
$q1_6c=$_POST["q1_6c"];
$q1_6d=$_POST["q1_6d"];
$q1_6e=$_POST["q1_6e"];
$q1_7=$_POST["q1_7"];
$q1_8a=$_POST["q1_8a"];
$q1_8b=$_POST["q1_8b"];
$q1_9=$_POST["q1_9"];
$q1_9a=$_POST["q1_9a"];
$q1_9b=$_POST["q1_9b"];
$q1_9c=$_POST["q1_9c"];
$q1_10=$_POST["q1_10"];
$q1_11=$_POST["q1_11"];
$q2_1=$_POST["q2_1"];
$q2_2=$_POST["q2_2"];
$q2_3=$_POST["q2_3"];
$q2_4=$_POST["q2_4"];

if ($q1_1 == "no" || $q1_2 == "no" || $q1_1=="no" || $q1_2=="no" || $q1_3=="yes" || $q1_4=="yes" || $q1_5=="yes" || $q1_6a=="yes" || $q1_6b=="yes" || $q1_6c=="yes" || $q1_6d=="yes"|| $q1_6e=="yes" || $q1_7=="yes" || $q1_8a=="yes" || $q1_8b=="yes" || $q1_9=="yes" || $q1_9a=="yes" || $q1_9b=="yes" || $q1_9c=="yes" || $q1_10=="yes" || $q1_11=="yes" || $q2_1=="yes" || $q2_2=="yes" || $q2_3=="yes" || $q2_4=="yes" ) {
    echo "<br>";
    echo "This time your not eligible to Donate Blood ";
    $eligible="no";
}
else {
    echo "<br>";
    echo "your eligible to Donate blood";
    $eligible="yes";
}
   
   
$query="insert into Bloodtable values('$first_name','$last_name','$bday','$emailid','$mobnum','$gender','$address','$city','$pincode','$state','$country','$occupation','$blood','$weight','$height','$lastdonation','$q1_1','$q1_2','$q1_3','$q1_4','$q1_5','$q1_6a','$q1_6b','$q1_6c','$q1_6d','$q1_6e','$q1_7','$q1_8a','$q1_8b','$q1_9','$q1_9a','$q1_9b','$q1_9c','$q1_10','$q1_11','$q2_1','$q2_2','$q2_3','$q2_4','$eligible',CURDATE())";
$result = mysqli_query($conn,$query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
echo "<br>";
echo "Data Saved in bloodtable";

mysql_close($conn);
?>
