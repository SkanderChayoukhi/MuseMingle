<?php

$conn = mysqli_connect("localhost", "root", "", "musemingle");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $url_image= mysqli_real_escape_string($conn, $_POST["url_image"]);
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $year = mysqli_real_escape_string($conn, $_POST["year"]);
    $size = mysqli_real_escape_string($conn, $_POST["size"]);
    $signed = mysqli_real_escape_string($conn, $_POST["signed"]);
    $frame = mysqli_real_escape_string($conn, $_POST["frame"]);
    $style = mysqli_real_escape_string($conn, $_POST["style"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $shipping = mysqli_real_escape_string($conn, $_POST["shipping"]);
    $nomArtist = mysqli_real_escape_string($conn, $_POST["nomArtist"]);
    $descriptionArtist = mysqli_real_escape_string($conn, $_POST["descriptionArtist"]);
    $photo_artiste = mysqli_real_escape_string($conn, $_POST["photo_artiste"]);

    // Determine the table name based on the selected type
    $table_name = "";
    switch ($type) {
        case 'drawings':
            $table_name = "drawings";
            break;
        case 'photography':
            $table_name = "photography";
            break;
        case 'paintings':
            $table_name = "paintings";
            break;
        default:
            header("Location: ./create.php");
            break;
    }

    // Insert data into the appropriate table
    $sql_insert = "INSERT INTO $table_name (url_image, title, price, year, size, signed, frame, style, subject, shipping, nomArtist, descriptionArtist, photo_artiste) 
    VALUES ('$url_image', '$title', '$price', '$year', '$size', '$signed', '$frame', '$style', '$subject', '$shipping', '$nomArtist', '$descriptionArtist', '$photo_artiste')";

    if (mysqli_query($conn, $sql_insert)) {
        header("Location: ./gallerypage.php");
    } else {
        header("Location: ./create.php");
    }
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouvel enregistrement</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../allcss/addart.css">
</head>

<body style="background-image :url('https://media.artsper.com/homepage/mainImageThematic.jpg') ">
    <section>
    <nav>
        <a href="./home.php">
            <img src="../allphoto/logo.png" alt="">
        </a>
        
        <div class="navigation">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./gallerypage.php">Gallery</a></li>
                <li><a class="active" href="">Add Art</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">games</a></li>
            </ul>
        </div>
    </nav>
    </section>
    <div >
        <form method="POST" class="container">
        <h2 style ="grid-column:1/3;grid-row:1/2;font-family:cursive;color:rgb(164, 7, 7);"><i> ADD A New Art</i></h2>
            <div class="form-group" style="grid-column:1/3;grid-row:2/3;padding-right:20px;">
                <label for="type"></label>
                <select class="form-control-type" id="type" name="type">
                    <option value="" disabled selected>Select category</option>
                    <option value="paintings">Paintings</option>
                    <option value="photography">Photography</option>
                    <option value="drawings">Drawings</option>
                </select>
            </div>
            <!-- Removed ID input as it may not be needed -->
            <div class="form-group" style ="grid-column:1/2;grid-row:3/4;padding-right:20px;">
                <label for="title"></label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
            <div class="form-group" style ="grid-column:2/3;grid-row:2/3;padding-left:20px">
                <label for="url_image"></label>
                <input type="text" class="form-control" id="url_image" name="url_image" placeholder="URL">
            </div>
            <div class="form-group" style ="grid-column:2/3;grid-row:3/4;padding-left:20px">
                <label for="price"></label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Price">
            </div>
            <div class="form-group" style ="grid-column:1/2;grid-row:4/5;padding-right:20px;">
                <label for="year"></label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Year">
            </div>
            <div class="form-group" style ="grid-column:2/3;grid-row:4/5;padding-left:20px">
                <label for="size"></label>
                <input type="text" class="form-control" id="size" name="size" placeholder="Size">
            </div>
          <div class="form-group" style ="grid-column:1/2;grid-row:5/6;padding-right:20px;">
                <label for="signed"></label>
                <input type="text" class="form-control" id="signed" name="signed" placeholder="Signed">
            </div>
            <div class="form-group"style ="grid-column:2/3;grid-row:5/6;padding-left:20px;">
                <label for="frame"></label>
                <input type="text" class="form-control" id="frame" name="frame" placeholder="Frame">
            </div>
            <div class="form-group"style ="grid-column:1/2;grid-row:6/7;padding-right:20px;">
                <label for="style"></label>
                <input type="text" class="form-control" id="style" name="style" placeholder="Style">
            </div>
            <div class="form-group" style ="grid-column:2/3;grid-row:6/7;padding-left:20px">
                <label for="subject"></label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
            </div>
            <div class="form-group" style ="grid-column:1/2;grid-row:7/8;padding-right:20px;">
                <label for="shipping"></label>
                <input type="text" class="form-control" id="shipping" name="shipping" placeholder="Shipping">
            </div>
            <div class="form-group"style ="grid-column:2/3;grid-row:7/8;padding-left:20px">
                <label for="nomArtist"></label>
                <input type="text" class="form-control" id="nomArtist" name="nomArtist" placeholder="Name Artist">
            </div>
            <div class="form-group"style ="grid-column:2/3;grid-row:8/9;padding-left:20px">
                <label for="descriptionArtist"></label>
                <input type="text" class="form-control" id="descriptionArtist" name="descriptionArtist" placeholder="Description Artist">
            </div>
            <div class="form-group"style ="grid-column:1/2;grid-row:8/9;padding-right:20px;">
                <label for="photo_artiste"></label>
                <input type="text" class="form-control" id="photo_artiste" name="photo_artiste" placeholder="Photo Artist">
            </div>
            <button type="submit" class="btn btn-primary btn-block"style ="grid-column:1/3;grid-row:9/10">ADD</button>
        </form>
    </div>
</body>

</html>

