<?php
$servername = "localhost";
/*$servername = "localhost";*/
$username = "justelis";
$password = "justelis";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
