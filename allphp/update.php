<?php

  $conn = mysqli_connect("localhost","root","","musemingle2");
  if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $titre = $_POST["titre"];
    $url_image = $_POST["url_image"];
    $price = $_POST["price"];
    $size = $_POST["size"];
    $year = $_POST["year"];
    $style = $_POST["style"];
    $subject = $_POST["subject"];
    $frame = $_POST["frame"];
    $shipping = $_POST["shipping"];
    $nomArtist = $_POST["nomArtist"];
    $descriptionArtist = $_POST["descriptionArtist"];
    $photo_artiste = $_POST["photo_artiste"];
    $art_id = $_GET["id"];
    $category = $_GET["category"];

    $query = "UPDATE $category SET title = '$titre', url_image = '$url_image',price = '$price', size = '$size' , year = '$year', style = '$style', subject = '$subject', frame = '$frame', shipping = '$shipping', nomArtist = '$nomArtist', descriptionArtist = '$descriptionArtist',photo_artiste = '$photo_artiste' WHERE id = '$art_id'";
    $result = $conn->query($query);
  }
  if($_GET["id"] and $_GET["category"] ){
    $art_id=$_GET["id"];
    $category = $_GET["category"];
    $query = "SELECT * FROM $category WHERE id=".$art_id;
    $result = $conn->query($query);
    $user = $result->fetch_all(MYSQLI_ASSOC);
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Information</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('https://media.artsper.com/homepage/mainImageThematic.jpg?fbclid=IwAR1FTk27uGO9U5NrNWFwp55A6JsmAGRoZqhUyW8s-dmgXHQ9Sj5VXsnCd2I')
    }
    form {
        background-color: rgba(255, 255, 255, 0.5);
        padding: 20px;
        border-radius: 5px;
        width: 800px; /* Adjust the width as needed */
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
    }
    .form-group {
        width: 50%; /* Set each column to occupy 50% of the form width */
        box-sizing: border-box;
        padding: 0 15px;
    }
    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"],
    .form-group input[type="url"],
    .form-group input[type="number"],
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #aaa;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .form-group textarea {
        height: 100px; /* Adjust the height as needed */
        resize: vertical;
    }
    .center-btn {
        width: 100%;
        text-align: center;
        margin-top: 10px;
    }
    input[type="submit"] {
        background-color: rgb(164, 7, 7);
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #8e0202;
    }
</style>
</head>
<body>

<form action="#" method="post">
    <div class="form-group">
        <label for="titre">Title:</label>
        <input type="text" id="titre" name="titre" value="<?php echo $user[0]["title"] ?>">
    </div>

    <div class="form-group">
        <label for="url_image">Image URL:</label>
        <input type="url" id="url_image" name="url_image" value="<?php echo $user[0]["url_image"] ?>">
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="<?php echo $user[0]["price"] ?>">
    </div>

    <div class="form-group">
        <label for="size">Size:</label>
        <input type="text" id="size" name="size" value="<?php echo $user[0]["size"] ?>">
    </div>

    <div class="form-group">
        <label for="frame">Frame:</label>
        <input type="text" id="frame" name="frame" value="<?php echo $user[0]["frame"] ?>">
    </div>

    <div class="form-group">
        <label for="year">Year:</label>
        <input type="text" id="year" name="year" value="<?php echo $user[0]["year"] ?>">
    </div>

    <div class="form-group">
        <label for="signed">Signed:</label>
        <input type="text" id="signed" name="signed" value="<?php echo $user[0]["signed"] ?>">
    </div>

    <div class="form-group">
        <label for="style">Style:</label>
        <input type="text" id="style" name="style" value="<?php echo $user[0]["style"] ?>">
    </div>

    <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" value="<?php echo $user[0]["subject"] ?>">
    </div>

    <div class="form-group">
        <label for="shipping">Shipping:</label>
        <input type="text" id="shipping" name="shipping" value="<?php echo $user[0]["shipping"] ?>">
    </div>

    <div class="form-group">
        <label for="nomArtist">Artist's Name:</label>
        <input type="text" id="nomArtist" name="nomArtist" value="<?php echo $user[0]["nomArtist"] ?>">
    </div>

    <div class="form-group">
        <label for="descriptionArtist">Artist's Description:</label>
        <textarea id="descriptionArtist" name="descriptionArtist" rows="4"><?php echo $user[0]["descriptionArtist"] ?></textarea>
    </div>

    <div class="form-group">
        <label for="photo_artiste">Artist's Photo:</label>
        <input type="url" id="photo_artiste" name="photo_artiste" value="<?php echo $user[0]["photo_artiste"] ?>">
    </div>

    <div class="center-btn">
        <input type="submit">
    </div>
</form>

</body>
</html>
