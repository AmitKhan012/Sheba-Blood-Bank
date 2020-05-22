<!DOCTYPE html>
<html>
<head>
	<title>request list</title>
	<link rel="stylesheet" type="text/css" href="css/list.css">
</head>
<body>
	<br>
		<h2>All Blood Request</h2>
		<table id="listTable">
			<tr>
				<th>username</th><th>Blood Group</th><th>Date</th>
			</tr>
			<?php
			$qry = "SELECT * FROM transaction_history";
			$res = $db_connect->query($qry) or die('bad query');
			while($row = $res->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $row['receiver_id']; ?></td>
				<td><?php echo $row['blood_group']; ?></td>
				<td><?php echo $row['tdate']; ?></td>
			</tr>
				<?php } ?>
			</table>
</body>
</html>