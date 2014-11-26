<?php
include 'conn.php';

$query = "UPDATE tasks " .
" SET task_name =  '" . $_POST['task_name'] .
"', assigned_to = '" . $_POST['assigned_to'] . "'" .
" WHERE id = " . $_POST['id'];

if ($conn->query($query)) {
	header("Location: index.php?ok=true");
} else {
 	echo "Error: (" . $conn->errno . ") " . $conn->error;
}
?>