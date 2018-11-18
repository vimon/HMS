<?php
   include("config.php");
   session_start();
   
   if(isset($_POST['username'])){
      $username =$_POST['username'];
  }
  if(isset($_POST['password'])){
      $password =$_POST['password']; 

  }
      
     
      $sql = "SELECT * FROM users WHERE username = '$username' and passcode = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      

      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
            
         
      if($row["type"]=="buser") 
      {
            $_SESSION['login_user'] = $username;
            header("location: dinfo.php");
      }
      else if($row["type"]=="badmin")
      {
        header("location: donate.php");
      }
      else if($row["type"]=="admin")
      {
        header("location: pform.php");
      }
      else if($row["type"]=="doctor")
      {
        header("location: doctor.php");
      }
      else if($row["type"]=="patient")
      {
        header("location: panav.php");
      }
      else  {
         $error = "Your Login Name or Password is invalid";
      }

/*echo "$login_session";

if($login_session)
{
		$s="select type from users where id='$username'";
$result1=mysqli_query($conn,$s);
echo mysql_error();
$row1=mysql_fetch_array($result1);
		if($row1["type"]=="buser")
{

header("location: dinfo.php");
}
else if($row["type"]=="badmin")
{
    header("location: dinfo.php");
}
} */ 
?>

<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
