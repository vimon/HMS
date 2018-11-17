<html>
<?php

 include("config.php");
 require_once 'navi/dnav.php';

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
 
 echo "<h3>Doctor Details</h3>";
 
$query="select * from doctor where dname='$dname' or dep='$dep'";
$result = mysqli_query($conn,$query);

if (!$result) {
    die('Invalid query: ' . mysql_error());
}
?>

<table border="2">
  <thead>
    <tr>
      <th>dname</th>
      <th>degree</th>
      <th>dep</th>
      <th>phnum</th>
      <th>Leave date</th>
      <th>age</th>
      <th>exp</th>
      <th>mon</th>
      <th>tues</th>
      <th>wed</th>
      <th>thurs</th>
      <th>fri</th>
      <th>sat</th>
      <th>sun</th>
      <th>rate</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ){
          echo "<tr><td>{$row['dname']}</td>
          <td>{$row['degree']}</td>
          <td>{$row['dep']}</td>
          <td>{$row['phnum']}</td>
          <td>{$row['ldate']}</td>
          <td>{$row['age']}</td>
          <td>{$row['exp']}</td>
          <td>{$row['mon']}</td>
          <td>{$row['tues']}</td>
          <td>{$row['wed']}</td>
          <td>{$row['thurs']}</td>
          <td>{$row['fri']}</td>
          <td>{$row['sat']}</td>
          <td>{$row['sunday']}</td>
          <td>{$row['rate']}</td>

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