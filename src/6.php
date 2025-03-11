<?php
// Get the user input from the form
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

// Validate the input
if (empty($name) || empty($age) || empty($gender)) {
    echo "All fields are required";
    exit;
}

// Create a new student object
$student = new Student();
$student->setName($name);
$student->setAge($age);
$student->setGender($gender);

// Add the student to the database
$db->addStudent($student);

?>