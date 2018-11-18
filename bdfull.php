<html>

<button onclick="goBack()">Go Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>
<a href="logout.php" ><button class="btn btn-large btn-danger" style="height: 80px; width: 150px;" > <font color="red"><h2>Log out</h2></font> </button></a>
<form action = "" method = "post">
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
</form>
<?php

 include("config.php");
 $blood=$_POST["blood"];
 echo "<h3>Donated Blood Donours infomation</h3>";
 $elig="donated";
$query="select * from Bloodtable where eligible='$elig' and blood='$blood'";
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