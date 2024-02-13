<?php

$conn = mysqli_connect("localhost", "root", "", "musemingle");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $title = $_POST["title"];
    $url_image = $_POST["url_image"];
    $price = $_POST["price"];
    $year = $_POST["year"];
    $size = $_POST["size"];
    $signed=$_POST["signed"];
    $frame = $_POST["frame"];
    $style = $_POST["style"];
    $subject = $_POST["subject"];
    $shipping = $_POST["shipping"];
    $nomArtist = $_POST["nomArtist"];
    $descriptionArtist = $_POST["descriptionArtist"];
    $photo_artiste = $_POST["photo_artiste"];
    $art_id = $_GET["id"];
    $category = $_GET["category"];

    // Prepare an SQL statement
    $query = "UPDATE `$category` SET title = ?, url_image = ?, price = ?, size = ?, year = ?, signed = ?, style = ?, subject = ?, frame = ?, shipping = ?, nomArtist = ?, descriptionArtist = ?, photo_artiste = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    // Bind parameters with their respective types
    $stmt->bind_param("ssdssssssssssi", $title, $url_image, $price, $size, $year, $signed, $style, $subject, $frame, $shipping, $nomArtist, $descriptionArtist, $photo_artiste, $art_id);
    // Execute the statement
    $stmt->execute();
    // Check if update was successful
    if ($stmt->affected_rows > 0) {
        // Redirect to gallery page if update successful
        header("Location: ./gallerypage.php");
    } else {
        // Redirect back to create page if update failed
        header("");
    }
    // Close statement
    $stmt->close();
}

if (isset($_GET["id"]) && isset($_GET["category"])) {
    $art_id = $_GET["id"];
    $category = $_GET["category"];
    $query = "SELECT * FROM `$category` WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $art_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $artwork = $result->fetch_assoc();
    // Close statement
    $stmt->close();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artwork</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../allcss/addart.css">
</head>

<body style="background-image :url('../allphoto/contactbackground.jpg') ">
    <div>
        <form method="POST" class="container">
            <h2 style="grid-column:1/3;grid-row:1/2;font-family:cursive;color:rgb(164, 7, 7);"><i> EDIT Artwork</i></h2>
            <div class="form-group" style="grid-column:1/3;grid-row:2/3;padding-right:20px;">
                <label for="type"></label>
                <select class="form-control-type" id="type" name="type" disabled>
                    <option value="paintings" <?php if ($category === 'paintings') echo 'selected'; ?>>Paintings</option>
                    <option value="photography" <?php if ($category === 'photography') echo 'selected'; ?>>Photography</option>
                    <option value="drawings" <?php if ($category === 'drawings') echo 'selected'; ?>>Drawings</option>
                </select>
            </div>
            <div class="form-group" style="grid-column:1/2;grid-row:3/4;padding-right:20px;">
                <label for="title"></label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $artwork['title']; ?>">
            </div>
            <div class="form-group" style="grid-column:2/3;grid-row:2/3;padding-left:20px">
                <label for="url_image"></label>
                <input type="text" class="form-control" id="url_image" name="url_image" placeholder="URL" value="<?php echo $artwork['url_image']; ?>">
            </div>
            <div class="form-group" style ="grid-column:2/3;grid-row:3/4;padding-left:20px">
                <label for="price"></label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo $artwork['price']; ?>">
            </div>
            <div class="form-group" style="grid-column:1/2;grid-row:4/5;padding-right:20px;">
                <label for="year"></label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Year" value="<?php echo $artwork['year']; ?>">
            </div>
            <div class="form-group" style="grid-column:2/3;grid-row:4/5;padding-left:20px">
                <label for="size"></label>
                <input type="text" class="form-control" id="size" name="size" placeholder="Size" value="<?php echo $artwork['size']; ?>">
            </div>
            <div class="form-group" style="grid-column:1/2;grid-row:5/6;padding-right:20px;">
                <label for="signed"></label>
                <input type="text" class="form-control" id="signed" name="signed" placeholder="Signed" value="<?php echo $artwork['signed']; ?>">
            </div>
            <div class="form-group" style="grid-column:2/3;grid-row:5/6;padding-left:20px;">
                <label for="frame"></label>
                <input type="text" class="form-control" id="frame" name="frame" placeholder="Frame" value="<?php echo $artwork['frame']; ?>">
            </div>
            <div class="form-group" style="grid-column:1/2;grid-row:6/7;padding-right:20px;">
                <label for="style"></label>
                <input type="text" class="form-control" id="style" name="style" placeholder="Style" value="<?php echo $artwork['style']; ?>">
            </div>
            <div class="form-group" style="grid-column:2/3;grid-row:6/7;padding-left:20px">
                <label for="subject"></label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="<?php echo $artwork['subject']; ?>">
            </div>
            <div class="form-group" style="grid-column:1/2;grid-row:7/8;padding-right:20px;">
                <label for="shipping"></label>
                <input type="text" class="form-control" id="shipping" name="shipping" placeholder="Shipping" value="<?php echo $artwork['shipping']; ?>">
            </div>
            <div class="form-group" style="grid-column:2/3;grid-row:7/8;padding-left:20px">
                <label for="nomArtist"></label>
                <input type="text" class="form-control" id="nomArtist" name="nomArtist" placeholder="Name Artist" value="<?php echo $artwork['nomArtist']; ?>">
            </div>
            <div class="form-group" style="grid-column:2/3;grid-row:8/9;padding-left:20px">
                <label for="descriptionArtist"></label>
                <input type="text" class="form-control" id="descriptionArtist" name="descriptionArtist" placeholder="Description Artist" value="<?php echo $artwork['descriptionArtist']; ?>">
            </div>
            <div class="form-group" style="grid-column:1/2;grid-row:8/9;padding-right:20px;">
                <label for="photo_artiste"></label>
                <input type="text" class="form-control" id="photo_artiste" name="photo_artiste" placeholder="Photo Artist" value="<?php echo $artwork['photo_artiste']; ?>">
            </div>

            <button id="undoButton" class="btn btn-primary btn-block" style="grid-column:1/2;grid-row:9/10;padding-right:20px;width: 18vh;margin-left: 1vh;">UNDO</button>
            <button type="submit" class="btn btn-primary btn-block" style ="grid-column:2/3;grid-row:9/10;padding-left:20px;width: 18vh;margin-left: 3vh;">UPDATE</button>
        </form>
    </div>
    
    <script>
    document.getElementById("undoButton").addEventListener("click", function() {
    window.location.href = "./gallerypage.php"; 
});
   </script>
</body>


</html>
