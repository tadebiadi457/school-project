<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");
$stmt->bind_param("i", $id);
$id = 1; // Replace with actual student ID

if ($stmt->execute()) {
  echo "Students found:\n";
  while($row = $stmt->fetch_assoc()){
    echo "- " . $row["name"] . "\n";
  }
} else {
  echo "There was an error executing the query: " . $conn->error;
}
$conn->close();
?>
