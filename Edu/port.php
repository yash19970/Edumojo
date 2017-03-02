<?php date_default_timezone_set('Asia/Calcutta'); ?>
<?php require_once("conn.php");?>
<?php
if($_SESSION['user_id'])
{
	$user = $_SESSION['user_id'];
	$query = "SELECT * FROM post"; 
	$query_run = mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($query_run))
	{
		// images/ values, posted by user name.
			echo $row['img_name'];
			echo $row['video_name'];
			echo $row['name'];
			echo $row['testim'];
			echo $row['msg'];
	}
}	





?>
