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
$weight=$_POST["weight"];
$height=$_POST["height"];
$lastdonation=$_POST["lastdonation"];
$q1.1=$_POST["q1.1"];
$q1.2=$_POST["q1.2"];
$q1.3=$_POST["q1.3"];
$q1.4=$_POST["q1.4"];
$q1.5=$_POST["q1.5"];
$q1.6a=$_POST["q1.6a"];
$q1.6b=$_POST["q1.6b"];
$q1.6c=$_POST["q1.6c"];
$q1.6d=$_POST["q1.6d"];
$q1.6e=$_POST["q1.6e"];
$q1.7=$_POST["q1.7"];
$q1.8a=$_POST["q1.8a"];
$q1.8b=$_POST["q1.8b"];
$q1.9=$_POST["q1.9"];
$q1.9a=$_POST["q1.9a"];
$q1.9b=$_POST["q1.9b"];
$q1.9c=$_POST["q1.9c"];
$q1.10=$_POST["q1.10"];
$q1.11=$_POST["q1.11"];
$q2.1=$_POST["q2.1"];
$q2.2=$_POST["q2.2"];
$q2.3=$_POST["q2.3"];
$q2.4=$_POST["q2.4"];
   
   
$query="insert into stud values('$roll','$name')";
$result = mysqli_query($conn,$query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
echo "Data Saved";
mysql_close($conn);
?>
