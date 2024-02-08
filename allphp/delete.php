<?php
// Store the referring URL before processing the delete request
$referring_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '../allhtml/IMG.php';

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "musemingle";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check if URL parameter is set
if(isset($_GET['url'])) {
    // Sanitize URL parameter
    $url = mysqli_real_escape_string($conn, $_GET['url']);

    // Perform deletion query for drawings table
    $sql1 = "DELETE FROM drawings WHERE url_image='$url'";
    $result1 = mysqli_query($conn, $sql1);

    // Perform deletion query for paintings table
    $sql2 = "DELETE FROM paintings WHERE url_image='$url'";
    $result2 = mysqli_query($conn, $sql2);

    // Perform deletion query for photography table
    $sql3 = "DELETE FROM photography WHERE url_image='$url'";
    $result3 = mysqli_query($conn, $sql3);

    // Check if any of the deletion queries were successful
    if($result1 || $result2 || $result3) {
        // Redirect to a success page or display a success message
        header("Location: ./gallerypage.php");
        exit();
    } else {
        // Redirect back to the referring URL (img.php) in case of an error
        header("Location: $referring_url");
        exit();
    }
} else {
    // Redirect back to the referring URL (img.php) if URL parameter is missing
    header("Location: $referring_url");
    exit();
}
?>



