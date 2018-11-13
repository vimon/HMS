<?php
include("config.php");
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
   
   
$query="insert into Bloodtable values('$first_name','$last_name','$bday','$emailid','$mobnum','$gender','$address','$city','$pincode','$state','$country','$occupation','$blood','$weight','$height','$lastdonation','$q1_1','$q1_2','$q1_3','$q1_4','$q1_5','$q1_6a','$q1_6b','$q1_6c','$q1_6d','$q1_6e','$q1_7','$q1_8a','$q1_8b','$q1_9','$q1_9a','$q1_9b','$q1_9c','$q1_10','$q1_11','$q2_1','$q2_2','$q2_3','$q2_4','yes',CURDATE())";
$result = mysqli_query($conn,$query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
echo "Data Saved";
mysql_close($conn);
?>
