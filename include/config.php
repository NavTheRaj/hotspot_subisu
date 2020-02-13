<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "R&D$3rv3r";
$dbName = 'radius';
// Create connection
$con = new mysqli($servername, $dbUsername, $dbPassword,$dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
