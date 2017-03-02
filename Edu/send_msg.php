<?php date_default_timezone_set('Asia/Calcutta'); ?>
<?php require_once("conn.php");?>
<?php 
session_start();
//if($_SESSION['user_id'])
//{
	//$user_from = $_SESSION['user_id']; 
	if(isset($_POST['submit']))
	{
		$user_from = "aman";
		$user_to = $_POST['to'];
		$message = $_POST['message'];		
		$time = date('dS F,Y | g:1:s A');
		$query = "INSERT INTO msg(user_to,message,user_from,dtime) VALUES ('{$user_to}','{$message}','{$user_from}','{$time}')";
		$query_run = mysqli_query($conn,$query);
		if($query_run)
		{
			echo 'sent';
		}
	}
//}
?>
<html>
   <body>
      
      <form action = "" method = "POST">
         To:<input type = "text" name = "to">
         Message:<input type = "text" name = "message">
         <input type = "submit" name="submit">	
      </form>
      
   </body>
</html>