<html>
<button onclick="goBack()">Go Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>
<?php

 include("config.php");
 
 if(isset($_POST['first_name'])){
    $first_name =$_POST['first_name'];
}
if(isset($_POST['last_name'])){
    $last_name =$_POST['last_name']; 

}
 ?>
 <br>
 <br>
<form action = "" method = "post">
                  <!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="first_name" maxlength="30"/>
<br>
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="last_name" maxlength="30"/>
<br>

</td>
</tr>

 <input type = "submit" value = " search "/><br />
               </form>
<?php
 
 echo "<h3>Patient Deatils for Doctor</h3>";
 
$query="select * from ptable where first_name='$first_name' or last_name='$last_name'";
$result = mysqli_query($conn,$query);

if (!$result) {
    die('Invalid query: ' . mysql_error());
}
?>

<table border="2">
  <thead>
    <tr>
      <th>Patient ID</th>
      <th>first_name</th>
      <th>last_name</th>
      <th>mobnum</th>
      <th>gender</th>
      <th>dep</th>
      <th>dname</th>
      <th>wno</th>
      <th>symtoms</th>
      <th>DOB</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
        while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ){
          echo "<tr><td>{$row['pid']}</td>
          <td>{$row['first_name']}</td>
          <td>{$row['last_name']}</td>
          <td>{$row['mobnum']}</td>
          <td>{$row['gender']}</td>
          <td>{$row['dep']}</td>
          <td>{$row['dname']}</td>
          <td>{$row['wno']}</td>
          <td>{$row['symtoms']}</td>
          <td>{$row['bday']}</td>
          
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