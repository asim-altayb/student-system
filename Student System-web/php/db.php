<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultSystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO result (id, stdName, stdCollage,stdDepartment,semDegree)
VALUES ('4', 'naji abdo', 'Genral Science','CS','86')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
