<?php
	include 'connect_db.php';
	session_start();
 	$username = $_SESSION['username'];
	$qry = "SELECT * FROM request WHERE username = '$username' "; 
	$res = $db_connect->query($qry) or die('failed query');
	if ($res-> num_rows > 0) {
 		$row = $res->fetch_assoc();
 		$username = $row['username'];
 		$blood_group = $row['blood_group'];
 		$tdate = $row['tdate'];
 		echo "ok"."<br>";
 		echo $username."<br>".$blood_group."<br>".$tdate."<br>";
    	$sql = "INSERT INTO transaction_history (receiver_id, blood_group, tdate) " 
            . "VALUES ('$username','$blood_group','$tdate')";
		$res2 = $db_connect->query($sql) or die('failed to insert into transection_history table');		
		$qry3 = "DELETE FROM request WHERE username = '$username' "; 
		$res3 = $db_connect->query($qry3) or die('failed to delete from request table');
		header('location:profile.php'); 		
 	}
?>