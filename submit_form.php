<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sandeep_vaz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$jobTitle = $_POST['jobTitle'];
$jobCategory = $_POST['jobCategory'];
$jobDescription = $_POST['jobDescription'];
$requirements = $_POST['requirements'];
$applicationDeadline = $_POST['applicationDeadline'];
$contactEmail = $_POST['contactEmail'];
$contactPhone = $_POST['contactPhone'];

// Insert data into the database
$sql = "INSERT INTO joboffers (jobTitle, jobCategory, jobDescription, requirements, applicationDeadline, contactEmail, contactPhone) 
        VALUES ('$jobTitle', '$jobCategory', '$jobDescription', '$requirements', '$applicationDeadline', '$contactEmail', '$contactPhone')";

if ($conn->query($sql) === TRUE) {
    echo "Job details submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
