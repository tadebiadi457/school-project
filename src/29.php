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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($_GET['title']); ?></title>
</head>
<body>

<h1><?php echo htmlspecialchars($_GET['title']); ?></h1>

<?php
// Do something with the data retrieved from the database...
?>

</body>
</html>
