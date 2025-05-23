<?php
// Initialize database connection
$db = new mysqli('localhost', 'username', 'password', 'database_name');

// Check if connection is successful
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Your code here

// Close the database connection
$db->close();
?>
