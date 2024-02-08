<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../allcss/style2.css">

    <title>Image Gallery</title>
</head>
<body>
    <section>
    <nav>
        <a href="../allphp/home.php">
            <img src="../allphoto/logo.png" alt="">
        </a>
        
        <div class="navigation">
            <ul>
                <li><a href="../allphp/home.php">Home</a></li>
                <li><a class="active" href="">Gallery</a></li>
                <li><a href="../allphp/create.php">Add Art</a></li>
                <li><a  href="">Contact us</a></li>
                <li><a  href="">games</a></li>
            </ul>
        </div>
    </nav>

    <section class="section2">
        <div class="gallery-categories" id="gallery-categories">
            <div class="category-container">
                <div class="category" data-category="all">
                    <img src="../allphoto/all.png" alt="all">
                    <h2>ALL</h2>
                </div>
                <div class="category" data-category="paintings">
                    <img src="../allphoto/paintings.png" alt="Painting Icon">
                    <h2>Paintings</h2>
                </div>
                <div class="category" data-category="photography">
                    <img src="../allphoto/photography.png" alt="Photography Icon">
                    <h2>Photography</h2>
                </div>
                <div class="category" data-category="drawings">
                    <img src="../allphoto/drawings.png" alt="Drawings Icon">
                    <h2>Drawings</h2>
                </div>
            </div>
        </div>
        <div class="gallery-container">
            <div class="gallery-controls">
                
                <input type="text" id="searchInput" placeholder="Looking for something...?">
                
                
                <!-- <button id="addImageButton" type="submit">Add Art</button> -->
            </div>

            <div class="gallery" id="gallery">
                <!-- Images will be dynamically added here -->
            </div>
            
            <div class="pagination" id="pagination"></div>
        </div>
    </section>


    <script src="../alljs/script2.js"></script>
</body>
</html>

