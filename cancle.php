<?php
	include 'connect_db.php';
	session_start();
 	$username = $_SESSION['username'];
	$qry = "SELECT * FROM request WHERE username = '$username' "; 
	$res = $db_connect->query($qry) or die('failed query');
	if ($res-> num_rows > 0) {
 		$row = $res->fetch_assoc();
		$qry3 = "DELETE FROM request WHERE username = '$username' "; 
		$res3 = $db_connect->query($qry3) or die('failed to delete from request table');
		header('location:profile.php'); 		
 	}
?>



