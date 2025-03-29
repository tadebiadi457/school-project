<?php
// Include the necessary library for database operations
require_once 'mysql.php';

// Connect to the database
$host = "your_host";
$user = "your_user";
$pass = "your_password";
$dbname = "your_db_name";

$conn = mysql_connect($host, $user, $pass) or die("Unable to connect to the database.");
if (!$conn) {
  echo "Connection error: " . mysql_error() . "<br>";
}

// Define your SQL query
$query = "SELECT * FROM your_table";
$result = mysql_query($query) or die(mysql_error());

echo "<table><tr><th>Name</th><th>Age</th></tr>";

// Fetch and display each row from the database
while ($row = mysql_fetch_assoc($result)) {
  echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";
}

echo "</table>";

// Close the database connection
mysql_close($conn);
?>
