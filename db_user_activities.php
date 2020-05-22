<?php
	$username = $_SESSION['username'];
	$qry = "SELECT blood_group,tdate FROM transaction_history WHERE receiver_id = '$username' ";
	$res = $db_connect->query($qry) or die('bad query');

?>