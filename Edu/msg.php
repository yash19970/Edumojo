<?php date_default_timezone_set('Asia/Calcutta'); ?>
<?php require_once("conn.php");?>
<?php 
session_start();
//if($_SESSION['user_id'])
//{
	$userid = "yash";	
	$query = "SELECT * FROM `msg` WHERE `user_to` = '{$userid}' ";
	$time = date('dS F,Y | g:1:s A');
	$query_run = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($query_run))
	{ 
		echo "->    ".$row['message']."   Sent from      ";
		echo $row['user_from'];
		echo $row['dtime']."<br>";

	}
//}

?>	