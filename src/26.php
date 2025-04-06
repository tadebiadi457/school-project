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

$sql = "SELECT * FROM students WHERE grade BETWEEN 9 AND 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Data Found:</h1>";
    while ($row = $result->fetch_assoc()) {
        echo "- " . $row["student_name"] . " - " . $row["grade"]. "<br>";
    }
} else {
    echo "0 Results";
}

$conn->close();
?>
