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
        background-color: #ccc;
    }
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        width: 400px;
        margin: 0 auto;
    }
    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="url"],
    input[type="number"],
    select,
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #aaa;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: rgb(164, 7, 7);
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .center-btn {
        text-align: center;
    }
    input[type="submit"]:hover {
        background-color: #8e0202;
    }
</style>
</head>
<body>

<form action="#" method="post">
    <label for="titre">Title:</label>
    <input type="text" id="titre" name="titre" value="<?php echo $user[0]["title"] ?>">

    <label for="url_image">Image URL:</label>
    <input type="url" id="url_image" name="url_image" value="<?php echo $user[0]["url_image"] ?>">

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" value="<?php echo $user[0]["price"] ?>">

    <label for="size">Size:</label>
    <input type="text" id="size" name="size" value="<?php echo $user[0]["size"] ?>">

    <label for="frame">Frame:</label>
    <input type="text" id="frame" name="frame" value="<?php echo $user[0]["frame"] ?>">

    <label for="year">Year:</label>
    <input type="text" id="year" name="year" value="<?php echo $user[0]["year"] ?>">

    <label for="signed">signed</label>
    <input type="text" id="signed" name="signed" value="<?php echo $user[0]["signed"] ?>">

    <label for="style">Style:</label>
    <input type="text" id="style" name="style" value="<?php echo $user[0]["style"] ?>">

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" value="<?php echo $user[0]["subject"] ?>">

    <label for="shipping">Shipping:</label>
    <input type="text" id="shipping" name="shipping" value="<?php echo $user[0]["shipping"] ?>">

    <label for="nomArtist">Artist's Name:</label>
    <input type="text" id="nomArtist" name="nomArtist" value="<?php echo $user[0]["nomArtist"] ?>">

    <label for="descriptionArtist">Artist's Description:</label>
    <textarea id="descriptionArtist" name="descriptionArtist" rows="4" value="<?php echo $user[0]["descriptionArtist"] ?>"></textarea>

    <label for="photo_artiste">Artist's Photo:</label>
    <input type="url" id="photo_artiste" name="photo_artiste" value="<?php echo $user[0]["photo_artiste"] ?>">

    <div class="center-btn">
        <input type="submit" >
    </div>
</form>

</body>
</html>
