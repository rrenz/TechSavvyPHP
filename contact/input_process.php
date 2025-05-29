<?php
include 'database_connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$sql = "INSERT INTO contacts (name, email, contact) VALUES ('$name', '$email', '$contact')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>