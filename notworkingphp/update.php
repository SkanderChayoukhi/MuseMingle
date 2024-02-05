<?php
$conn = mysqli_connect("localhost", "root", "", "musemingle");
if (!$conn) {
  die("no connection");
}


if (isset($_GET["id"])) {
  $user_id = $_GET["id"];

  $query = "SELECT * FROM muse WHERE id = " . $user_id;

  $result = $conn->query($query);

  $user = $result->fetch_assoc();


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //  update request
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <style>
    td,
    th {
      vertical-align: middle;
      text-align: center;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">update</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./index.php">All Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./create.php">Create User</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="card mt-3 mx-3 p-3">
    <form enctype="multipart/form-data">
      <div class="form-group">
        <label for="nom_tab">Nom du tableau</label>
        <input type="text" class="form-control" value="<?php echo $user["nom_tab"] ?>" id="nom_tab" placeholder="nom_tab" />
      </div>
      <div class="form-group">
        <label for="prix">prix</label>
        <input type="text" class="form-control" id="prix" placeholder="prix" />
      </div>
      <div class="form-group">
        <label for="categorie">categorie</label>
        <select class="form-control" id="categorie">
          <option value="painting">painting</option>
          <option value="drawing">drawing</option>
          <option value="collage">collage</option>
          <option value="photography">photography</option>

        </select>
      </div>
      <div class="form-group">
        <label for="date">date</label>
        <input type="text" class="form-control" name="date" id="date" placeholder="date" />

      </div>
      <div class="form-group">
        <label for="artiste">Nom de l'artiste</label>
        <input type="text" class="form-control" name="artiste" id="artiste" placeholder="artiste" />
      </div>
      <div class="form-group">
        <label for="description_artiste">Description de l'artiste</label>
        <input type="text" class="form-control" name="description_artiste" id="description_artiste" placeholder="description_artiste" />
      </div>

      <button type="submit" class="btn btn-primary mt-3">Add User</button>
    </form>
  </div>
</body>

</html>