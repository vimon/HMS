<?php
include("config.php");
require_once 'navi/nav.php';

$first_name=$_POST["first_name"];
$bday=$_POST["bday"];
$mobnum=$_POST["mobnum"];
$eli="yes";
$query="update Bloodtable set eligible='donated' where first_name='$first_name' and bday='$bday' and mobnum='$mobnum' and eligible='$eli'";
$result = mysqli_query($conn,$query);

$eligi="donated";
$sql = "SELECT * FROM Bloodtable WHERE first_name='$first_name' and bday='$bday' and mobnum='$mobnum'and eligible='$eligi'";
      $result1 = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      

      $count = mysqli_num_rows($result1);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
            
         
      if($count == 0) {
          echo "<br>";
           echo "Your Not Eligible to donate Blood now ";
           echo "<br>";
           echo "Please Fill Blood Donation form";
            echo "<br>";
      }else {
        echo "<br>";
          echo "updated in database ";
      }
mysql_close($conn);
?>
