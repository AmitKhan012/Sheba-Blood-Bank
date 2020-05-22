<?php  include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>request list</title>
	<link rel="stylesheet" type="text/css" href="css/list.css">
</head>
<body>
	<br>
		<table id="listTable">
			<tr>
				<th>Name</th><th>Blood Group</th><th>Date</th><th>Contdact Number</th><th>note</th>
			</tr>
			<?php include 'db_request_list.php';
				while($row = $res->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $row['username']; $_SESSION['name'] = $row['username']; ?></td>
				<td><?php echo $row['blood_group']; ?></td>
				<td><?php echo $row['tdate']; ?></td>
				<td><?php echo $row['contract_number'];?></td>
				<td><?php echo $row['note']; ?></td>
			</tr>
				<?php } ?>
			</table>
</body>
</html>