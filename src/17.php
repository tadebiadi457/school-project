<?php
    $username = "admin";
    $password = "password123";
    
    if ($_POST) {
        $data = file_get_contents("example.txt");
        require 'database.php'; // Assuming database.php contains necessary SQL queries
    
        // Insert username and password into the database
        insert_user($username, $password);
    } else {
        echo "No data received. Please check your form.";
    }
?>
