<?php
$conn = new mysqli('localhost', 'root', '123');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} 

if (!$conn->select_db('darcio')) {
	die('Cannot select the database: ' . $conn->error);
}
?>