<html>
<?php

 include("config.php");
 require_once 'navi/pnav.php';
 if(isset($_POST['dname'])){
    $dname =$_POST['dname'];
}
if(isset($_POST['dep'])){
    $dep =$_POST['dep']; 

}
 ?>
 <br>
 <br>
<form action = "" method = "post">
                  <label><STRONG>Doctor Name</STRONG></label>
                  <?php
$query1="select dname from doctor";
$result1 = mysqli_query($conn,$query1);

if (!$result1) {
    die('Invalid query: ' . mysql_error());
}
?>
<select name="dname" size="1" id="dname"> 
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

  <br /><br />
  </select>

  <label><STRONG>Department:</STRONG></label>
  <select name="dep" size="1" id="dep">
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
  </select>
<br/><br />
                  <input type = "submit" value = " search "/><br />
               </form>
<?php
 
 echo "<h3>Patient Deatils for Doctor</h3>";
 
$query="select * from ptable where dname='$dname' or dep='$dep'";
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