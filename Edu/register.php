<?php 
require_once("conn.php"); 
error_reporting(1);
if(isset($_POST['submit']))
{
  $name =  $_POST['name'];
  $password=  $_POST['password'];
  if(!empty($name) && !empty($password) )
  {

   $query = "INSERT INTO user (name,password) VALUES ('{$name}','{$password}')";
   $result = mysqli_query($conn,$query);
   if(!$result)
   {
    die('Error, Please Try Again');
  }
  else {
    header("Location:register.php");
  }
}
}


mysqli_close($conn);
?>



<!DOCTYPE html>
<html>
<body>
<form action="register.php" method="post">
    Name<input type="text" name="name" value="">
    Password<input type="password" value="" name="password">
    <input type="submit" name="submit" ></input>
</form>

</body>
</html>

