 <?php date_default_timezone_set('Asia/Calcutta'); ?>
<?php require_once("conn.php");?>
<?php session_start(); ?>
<?php 
 if(isset($_POST['submit']))
 { 
 	$name = $_POST['name'];
 	$password = $_POST['password'];
 	$query = "SELECT * FROM user WHERE name ='{$name}' AND password = '{$password}' ";
	$query_run = mysqli_query($conn,$query);
	 if(mysqli_num_rows($query_run) == 1)
	 {
	 	$_SESSION['user_id'] = $name;
	 	//redirect
	 }
	 else
	 {
		echo 'Invalid username/password'; 
	 }
	 
 }
?>

<!DOCTYPE html>
<html>
<body>
<form action="login.php" method="post">
    Name<input type="text" name="name" value="">
    Password<input type="password" value="" name="password">
    <input type="submit" name="submit" ></input>
</form>

</body>
</html>

