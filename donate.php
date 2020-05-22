<?php
	include 'connect_db.php';
	session_start();
	$username = $_SESSION['username'];
	echo $username."<br>";
	$name = $_SESSION['name'];
	echo $name;


?>