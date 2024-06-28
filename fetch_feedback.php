<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campaign_feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from database
$sql = "SELECT id, name, email, feedback, rating, submission_date FROM feedback";
$result = $conn->query($sql);

$feedbackList = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $feedbackList[] = $row;
    }
} 

echo json_encode($feedbackList);

$conn->close();
?>
