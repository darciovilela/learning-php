<?php
include 'conn.php';

$query = "INSERT INTO tasks (task_name, assigned_to) " .
" VALUES('" . $_POST['task_name'] . "', '" . $_POST['assigned_to'] . "')";

if ($conn->query($query)) {
	header("Location: index.php?ok=true");
} else {
 	echo "Error: (" . $conn->errno . ") " . $conn->error;
}
?>