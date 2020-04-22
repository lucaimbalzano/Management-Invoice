<?php
$servername = "imbalzano";
$username = "imbalzano";
$password = "c7HmpWwzVmmW";
$dbname = "Management_Invoice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo 'incorrect connection...';
}
else {
 echo 'the connection have success...';
}
?>
