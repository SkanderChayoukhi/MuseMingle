<?php
header("Content-Type: application/json");

// Replace these with your actual database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "musemingle";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the category from the query parameters
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Use a parameterized query to avoid SQL injection
$stmt = $conn->prepare("SELECT url_image, title, price, nomArtist FROM $category");
$stmt->execute();
$result = $stmt->get_result();

if ($result) {
    // Fetch the results properly
    $images = $result->fetch_all(MYSQLI_ASSOC);

    // Output the data as JSON
    echo json_encode($images);
} else {
    // Handle errors
    echo json_encode(["error" => $conn->error]);
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>


