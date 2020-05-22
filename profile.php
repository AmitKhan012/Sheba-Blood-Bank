<?php
	include 'navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" type="text/css" href="css/list.css">
</head>
<body>
	<section>
		<h2>Pending request</h2>
		<div>
				<table id="listTable">
					<?php 
					$username = $_SESSION['username'];
					$qry = "SELECT username,blood_group FROM request WHERE username = '$username' "; 
					$res = $db_connect->query($qry) or die('bad query');
					if ($res-> num_rows > 0) {
					$row = $res->fetch_assoc();
					?>
					<tr>
						<th><?php echo "Request for blood group: ".$row['blood_group']; ?></th>
						<th><a href="received.php">received</a></th>
						<th><a href="cancle.php">cancle</a></th>
					</tr>
					<?php } ?>
					</table>
					<table id="listTable">
						<h2>Previous Activities</h2>
						<?php include 'db_user_activities.php';
							if($res-> num_rows>0){ ?>
						<tr> <th>Blood Group</th><th>Date</th></tr>
						<?php while($row = $res->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $row['blood_group']; ?></td>
							<td><?php echo $row['tdate']; ?></td>
						</tr>
						<?php }} ?>
					</table>
					<?php if ($_SESSION['username']==$_SESSION['admin'] ) {
							include 'transaction_history.php';
					} ?>
					
		</div>
	</section>
</body>
</html>