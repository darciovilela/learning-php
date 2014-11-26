<?php 
include 'conn.php';

$rs = $conn->query("SELECT * FROM tasks WHERE id = " . $_GET['id']);
?>
<html>
	<head>
		<title>Darcio</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	<head>
	<body>
		<h1>Edit</h1>
		<form action="update.php" method="post">
			<?php if ($obj = $rs->fetch_object()) { ?>
				<input type="hidden" name="id" value="<?php echo $obj->id ?>">
				Task Name: <input type="text" name="task_name" value="<?php echo $obj->task_name ?>"><br>
				Assigned To: <input type="text" name="assigned_to" value="<?php echo $obj->assigned_to ?>"><br>
				<input type="submit"><br>
			<?php } ?>
		</form>
	</body>
</html>