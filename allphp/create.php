<?php


$conn = mysqli_connect("localhost", "root", "", "musemingle");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$message = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $url = mysqli_real_escape_string($conn, $_POST["url"]);
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
    $photoArtist = mysqli_real_escape_string($conn, $_POST["photoArtist"]);

    
    $sql_insert = "INSERT INTO painting (id, url, title, price, year, size, signed, frame, style, subject, shipping, nomArtist, descriptionArtist, photoArtist) 
    VALUES ('$id', '$url', '$title', '$price', '$year', '$size', '$signed', '$frame', '$style', '$subject', '$shipping', '$nomArtist', '$descriptionArtist', '$photoArtist')";

    if (mysqli_query($conn, $sql_insert)) {
        $message = "Nouvel enregistrement créé avec succès.";
    } else {
        $message = "Erreur lors de la création de l'enregistrement: " . mysqli_error($conn);
    }
}


mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouvel enregistrement</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>
   
        body {
           
            background-size:cover;
            background-position:center;
          
        
        }
        .container {
            background-color: rgba(255, 255, 255, 0.5); /* Fond transparent avec une opacité de 50% */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 500px;
            margin: 50px auto;
            color: #333;
            display:grid;
            grid-template-columns:50% 50%;
            grid-template-rows:  400 px 200px 200px 200px 200px 200px 200px 200px 400px;
}

        .btn-primary {
            background-color: rgb(164, 7, 7); 
            border-color: rgb(164, 7, 7); 
            color: #fff; 
            transition: background-color 0.3s ease;
            border-radius: 20px; 
            padding: 12px 20px; 
            font-size: 16px; 
            cursor: pointer; 
            display: block; 
            margin-top: 10px; 
        }

        .btn-primary:hover {
            background-color: #cc0000; 
            border-color: #cc0000; 
        }

        .form-group {
            margin-bottom: 8px; 
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            background-color: #f9f9f9;
            color: #333; 
            border: none;
            border-radius: 20px;
            padding: 12px 20px; 
            margin-bottom: 10px
            transition: all 0.3s ease;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            background-color: #fff;
            border: 2px solid #ff0000; 
            outline: none;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
        }

        h2 {
            text-align: center;
            color: #333; 
            margin-bottom: 15px;
        }
    </style>
<body style="background-image :url('https://media.artsper.com/homepage/mainImageThematic.jpg') ">
    <div >
        <form method="POST" class="container">
        <h2 style ="grid-column:1/3;grid-row:1/2;font-family:cursive;color:rgb(164, 7, 7);"><i>ADD A New Photo</i></h2>
            <div class="form-group" style ="grid-column:1/2;grid-row:2/3;padding-right:20px;">
                <label for="id"></label>
                <input type="text" class="form-control" id="id" name="id" placeholder="ID">
            </div>
            <div class="form-group" style ="grid-column:1/2;grid-row:3/4;padding-right:20px;">
                <label for="url"></label>
                <input type="text" class="form-control" id="url" name="url" placeholder="URL">
            </div>
            <div class="form-group" style ="grid-column:2/3;grid-row:2/3;padding-left:20px">
                <label for="title"></label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
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
                <label for="photoArtist"></label>
                <input type="text" class="form-control" id="photoArtist" name="photoArtist" placeholder="Photo Artist">
            </div>
            <button type="submit" class="btn btn-primary btn-block"style ="grid-column:1/3;grid-row:9/10">ADD</button>
        </form>
    </div>
</body>

</html>
