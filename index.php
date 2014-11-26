<?php 
include 'conn.php';

$rs = $conn->query("SELECT * FROM tasks");
?>
<html>
	<head>
		<title>Darcio</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	<head>
	<body>
		<h1>Pagina do <?php echo $_GET['name']; ?></h1>
		<h2>Minha lista de tarefas:</h2>
		<table border="1">
			<tr>
				<th>Edit</th>
				<th>ID</th>
				<th>Name</th>
				<th>Name Length</th>
				<th>Assigned</th>
			</tr>
			<?php while ($obj = $rs->fetch_object()) { ?>
				<tr>
					<td><a href="edit.php?id=<?php echo $obj->id ?>">Edit</a></td>
					<td><?php echo $obj->id ?></td>
					<td><?php echo $obj->task_name ?></td>
					<td><?php echo strlen($obj->task_name) ?></td>
					<td><?php echo $obj->assigned_to ?></td>
				</tr>
			<?php } ?>
		</table>
		<br><br>
		<a href="new.php">Add new task</a><br><br>
		<div class="box">
			<h2>Topico</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
			<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
		</div>
		<div class="box">
			<h2>Topico</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
			<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
		</div>
		<div class="box">
			<h2>Topico</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
			<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
		</div>
		<script type="text/javascript">
			document.write(1+1);
		</script>
	</body>
</html>