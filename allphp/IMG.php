<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "musemingle";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$url = isset($_GET['url']) ? mysqli_real_escape_string($conn, $_GET['url']) : '';
$related_image_urls = array();

$sql = "SELECT * FROM drawings WHERE url_image='$url'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

$sql1 = "SELECT * FROM paintings WHERE url_image='$url'";
$result1 = mysqli_query($conn, $sql1);
$resultCheck1 = mysqli_num_rows($result1);

$sql2 = "SELECT * FROM photography WHERE url_image='$url'";
$result2 = mysqli_query($conn, $sql2);
$resultCheck2 = mysqli_num_rows($result2);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tt = $row['title'];
        $nn = $row['nomArtist'];
        $pp = $row['price'];
        $ss = $row['size'];
        $yy = $row['year'];
        $sig = $row['signed'];
        $ff = $row['frame'];
        $st = $row['style'];
        $su = $row['subject'];
        $sh = $row['shipping'];
        $dd = $row['descriptionArtist'];
        $arr = $row['photo_artiste'];
        $sql = "SELECT url_image FROM drawings WHERE nomArtist='$nn' AND url_image!='$url'";
        $result_related = mysqli_query($conn, $sql);
        $i = 1;
        if ($result_related) {
            while ($row1 = mysqli_fetch_assoc($result_related) and $i <= 4) {
                $related_image_urls[] = $row1['url_image'];
                $i = $i + 1;
            }
        }
    }
} elseif ($resultCheck1 > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
        $tt = $row['title'];
        $nn = $row['nomArtist'];
        $pp = $row['price'];
        $ss = $row['size'];
        $yy = $row['year'];
        $sig = $row['signed'];
        $ff = $row['frame'];
        $st = $row['style'];
        $su = $row['subject'];
        $sh = $row['shipping'];
        $dd = $row['descriptionArtist'];
        $arr = $row['photo_artiste'];
        $sql = "SELECT url_image FROM paintings WHERE nomArtist='$nn' AND url_image!='$url'";
        $result_related = mysqli_query($conn, $sql);
        $i = 1;
        if ($result_related) {
            while ($row1 = mysqli_fetch_assoc($result_related) and $i <= 4) {
                $related_image_urls[] = $row1['url_image'];
                $i = $i + 1;
            }
        }
    }
} elseif ($resultCheck2 > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
        $tt = $row['title'];
        $nn = $row['nomArtist'];
        $pp = $row['price'];
        $ss = $row['size'];
        $yy = $row['year'];
        $sig = $row['signed'];
        $ff = $row['frame'];
        $st = $row['style'];
        $su = $row['subject'];
        $sh = $row['shipping'];
        $dd = $row['descriptionArtist'];
        $arr = $row['photo_artiste'];
        $sql = "SELECT url_image FROM photography WHERE nomArtist='$nn' AND url_image!='$url'";
        $result_related = mysqli_query($conn, $sql);
        $i = 1;
        if ($result_related) {
            while ($row1 = mysqli_fetch_assoc($result_related) and $i <= 4) {
                $related_image_urls[] = $row1['url_image'];
                $i = $i + 1;
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork Page</title>
    <link rel="stylesheet" href="../allcss/PhotodDescription.css">
</head>
<body>
    <section>
    <nav id="navbar" class="navbar" >
        <a href="./home.php">
            <img src="../allphoto/logo.png" alt="">
        </a>
        <div class="navigation" style="padding-right: 50px;padding-left:150px;">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a class="active" href="./gallerypage.php">Gallery</a></li>
                <li><a  href="">Contact us</a></li>
                <li><a  href="">games</a></li>
                <li><a class="delete-button" href="#">Delete</a></li>
            </ul>
        </div>
    </nav>
    </section>
    <div class="container" style="padding-top: 100px;">
        <div class="artwork">
            <div class="image-container">
                <img src="<?php echo $url ?>" alt="Artwork Image" id="fullscreen-image" >
            </div>
        </div>
        <div class="info">
            <h1><?php echo $tt ?></h1>
            <div><p style="font-size: 20px;">by <i style="color:rgb(164, 7, 7);font-family:cursive;"><?php echo $nn ?></i></p></div>
            <p class="price"> <?php echo $pp ?> Dt</p>
            <ul class="details">
                <li>Year:<?php echo $yy ?></li>
                <li>Size: <?php echo $ss ?></li>
                <li>Signed :<?php echo $sig ?></li>
                <li>Frame:<?php echo $ff ?></li>
                <li>Style: <?php echo $st ?></li>
                <li>Subject: <?php echo $su ?></li>
                <li>Shipping:<?php echo $sh ?></li>
           
                <br>
                <div class="buttons">
                      <button class="add-to-cart">Add to Basket</button>
                 </div>
                <div class="buttons">
                      <button class="add-to-favorites">Add to my favorites</button>
                </div>
            </ul>
        </div>
    </div>
    <div class="container1">
        <div class="artist">
            <h1><i style="color:rgb(164, 7, 7);font-family:cursive;"><?php echo $nn ?></i></h1>
            <img src="<?php echo $arr ?>" alt="artist photo">
        </div>
        <div class="aboutsection"><p><?php echo $dd ?></p></div>
        
    </div>
    <div class="container2">
        <h3>Other listings from <?php echo $nn ?>:</h3>
        <div class="first" style="padding-left: 190px;padding-right: 0px;"><a href="<?php echo 'IMG.php?url=' . urlencode($related_image_urls[0]); ?>" target="_blank"><img src="<?php echo $related_image_urls[0]; ?>"></a></div>
        <div class="second" style="padding-left: 0px;"><a href="<?php echo 'IMG.php?url=' . urlencode($related_image_urls[1]); ?>" target="_blank"><img src="<?php echo $related_image_urls[1]; ?>"></a></div>
        <div class="third"><a href="<?php echo 'IMG.php?url=' . urlencode($related_image_urls[2]); ?>" target="_blank"><img src="<?php echo $related_image_urls[2]; ?>"></a></div>
        <div class="four" style="padding-right: 100px;"><a href="<?php echo 'IMG.php?url=' . urlencode($related_image_urls[3]); ?>" target="_blank"><img src="<?php echo $related_image_urls[3]; ?>"></a></div>

    </div>

    <script> 
         let prevScrollPos = window.pageYOffset;

        window.onscroll = function() {
            const currentScrollPos = window.pageYOffset;

            if (prevScrollPos > currentScrollPos) {
    // Scrolling up, show the navbar
                 document.getElementById("navbar").style.top = "0";
            } else {
    // Scrolling down, hide the navbar
                  document.getElementById("navbar").style.top = `-${document.getElementById("navbar").offsetHeight}px`;
            }

            prevScrollPos = currentScrollPos;
        };
        document.getElementById('fullscreen-image').addEventListener('click', toggleFullScreen);
    
        function toggleFullScreen() {
             const element = document.getElementById('fullscreen-image');
    
             if (!document.fullscreenElement) {
                 if (element.requestFullscreen) {
                     element.requestFullscreen();
                } else if (element.mozRequestFullScreen) {
                      element.mozRequestFullScreen();
                } else if (element.webkitRequestFullscreen) {
                     element.webkitRequestFullscreen();
                } else if (element.msRequestFullscreen) {
                     element.msRequestFullscreen();
                }   
            } else {
                 if (document.exitFullscreen) {
                      document.exitFullscreen();
                } else if (document.mozCancelFullScreen) {
                     document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) {
                     document.webkitExitFullscreen();
                } else if (document.msExitFullscreen) {
                     document.msExitFullscreen();
                }
            }
        }

    // Add an event listener to the delete button
        document.querySelector('nav .delete-button').addEventListener('click', function() {
        // Prompt a confirmation alert before deletion
        if (confirm("Are you sure you want to delete this artwork?")) {
            // If user confirms, redirect to the delete endpoint
            window.location.href = "./delete.php?url=<?php echo urlencode($url); ?>";
        }
        });
    </script>


</body>

</html>

       
