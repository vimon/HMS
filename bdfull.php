<html>

<?php

 include("config.php");
 require_once 'navi/nav.php';
 echo "<h3>Donated Blood Donours infomation</h3>";
 $elig="donated";
$query="select * from Bloodtable where eligible='$elig'";
$result = mysqli_query($conn,$query);

if (!$result) {
    die('Invalid query: ' . mysql_error());
}
?>

<table border="2">
  <thead>
    <tr>
      <th>First_Name</th>
      <th>Blood Group</th>
      <th>Gender</th>
      <th>Phone Num</th>
      <th>City</th>
      <th>Weight</th>
      <th>Height</th>
      <th>Last date of donation</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
        while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ){
          echo "<tr><td>{$row['first_name']}</td>
          <td>{$row['blood']}</td>
          <td>{$row['gender']}</td>
          <td>{$row['mobnum']}</td>
          <td>{$row['city']}</td>
          <td>{$row['weight']}</td>
          <td>{$row['height']}</td>
          <td>{$row['curdate']}</td>
           </tr>\n";
        }
      
    ?>
  </tbody>
</table>

<?php
   echo "Fetched data successfully\n";
   
  
mysql_close($conn);
?>
</html>