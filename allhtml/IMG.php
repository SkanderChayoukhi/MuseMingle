<?php
     include_once 'includes/dbh.inc.php';
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
    <?php
         $sql="SELECT * FROM drawings WHERE id =1;";
         $result = mysqli_query($conn,$sql);
         $resultCheck= mysqli_num_rows($result);
         if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                $hh= $row['url'];
                $tt= $row['title'];
                $nn=$row['nomArtist'];
                $pp=$row['price'];
                $ss=$row['size'];
                $yy=$row['year'];
                $sig=$row['signed'];
                $ff=$row['frame'];
                $st=$row['style'];
                $su=$row['subject'];
                $sh=$row['shipping'];
                $dd=$row['descriptionArtist'];
                $arr=$row['urlimgartist'];


            }
         }
    ?>  
    <nav id="navbar" class="navbar" >
        <img src="../allphoto/logo.png" alt="">
        <div class="navigation" style="padding-right: 200px;">
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="./index2.html">Gallery</a></li>
                <li><a href="">Artists</a></li>
                <li><a  href="">Contact us</a></li>
                <li><a  href="">games</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="padding-top: 100px;">
        <div class="artwork">
            <div class="image-container">
                <img src=<?php echo $hh ?> alt="Artwork Image" id="fullscreen-image">
            </div>
        </div>
        <div class="info">
            <h1><?php echo $tt ?></h1>
            <div><p style="font-size: 20px;">by <i style="color:rgb(164, 7, 7);font-family:cursive;"><?php echo $nn ?></i></p></div>
            <p class="price">£ <?php echo $pp ?></p>
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
            <h1>the name of the artist</h1>
            <img src= <?php echo $arr ?> alt="artist photo">
        </div>
        <div class="aboutsection">
            <p><?php echo $dd ?><br><b><a href="#" target="_blank">see more(if there is an artist page)</a> </b></p>
            <br>
        </div>
        
    </div>
    <div class="container2">
        <h3>Other listings from name of the artist:</h3>
        <div class="first" style="padding-left: 190px;padding-right: 0px;"><a href="#" target="_blank"><img src="../allphoto/img1.jpg"></a></div>
        <div class="second" style="padding-left: 0px;"><a href="#" target="_blank"><img src="../allphoto/HD-wallpaper.jpg"></a></div>
        <div class="third"><a href="#" target="_blank"><img src="../allphoto/img3.jpg"></a></div>
        <div class="four" style="padding-right: 100px;"><a href="#" target="_blank"><img src="../allphoto/img4.jpg"></a></div>

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
    </script>
</body>

</html>