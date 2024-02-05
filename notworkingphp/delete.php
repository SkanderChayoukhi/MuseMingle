
<?php
$conn = mysqli_connect("localhost", "root", "", "musemingle");
if (!$conn) {
    die("no connection");
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $user_id = $_GET["id"];
    $query = "DELETE FROM muse WHERE id=" . $user_id;
    $conn->query($query);
}

header("Location: index.php");
exit();
?>

