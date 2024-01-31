<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork Page</title>
    <link rel="stylesheet" href="photodescription.css">
    Arij Ezzahi
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="artwork">
            <div class="image-container">
                <img src="BvgAmfNCEAE0F8B-666x418.jpg" alt="Artwork Image" id="fullscreen-image"> 
                <script>
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
            </div>
        </div>
        <div class="info">
            <h1>Title of the photo</h1>
            <p class="small-text">by nom artist</p>
            <p class="price">£ price</p>
            <ul class="details">
                <li>Year:2023</li>
                <li>Size: give here the size</li>
                <li>Signed :Yes, Front bottom right</li>
                <li>Frame:No</li>
                <li>Style: Abstract</li>
                <li>Subject: Landscapes, sea and sky</li>
                <li>Shipping:Ships from Australia</li>
            </ul>
            <br>
            <div class="buttons">
                <button class="add-to-cart">Add to Basket</button>
            </div>
            <div class="buttons">
                <button class="add-to-favorites">Add to my favorites</button>
            </div>
        </div>
    </div>
    <div class="container1">
        <div class="artist">
            <h1>the name of the artist</h1>
            <img src="images.jpg"alt="artist photo">
        </div>
        <div class="aboutsection">
            <p>this is a short parahraph where we're gonna put things about the artist.this is a short parahraph where we're gonna put things about the artist.this is a short parahraph where we're gonna put things about the artist.this is a short parahraph where we're gonna put things about the artist.<br><b><a href="#" target="_blank">see more(if there is an artist page)</a> </b></p>
            <br>
        </div>
        
    </div>
    <div class="container2">
        <h3>Other listings from name of the artist:</h3>
        <div class="first" style="padding-left: 190px;padding-right: 0px;"><a href="#" target="_blank"><img src="Nychos-Chemistry1.jpg"></a></div>
        <div class="second" style="padding-left: 0px;"><a href="#" target="_blank"><img src="HD-wallpaper-pencil-drawing-art-cool-pencil-people-flowers-drawings.jpg"></a></div>
        <div class="third"><a href="#" target="_blank"><img src="pencil-drawings-of-animals-1200x900.jpg"></a></div>
        <div class="four" style="padding-right: 100px;"><a href="#" target="_blank"><img src="9f9b789ab0950e0a3acead1edbae1d70.jpg"></a></div>

    </div>
    <footer style="background: white; padding: 20px; text-align: left; font-family: 'Arial', sans-serif;">

        <div style="display: flex; justify-content: space-around; color: #808080;">
            <div style="width: 30%;">
                <h3 style="color: rgb(164, 7, 7)">About Us</h3>
                <p>MuseMingle, our platform dedicated to the celebration of art, serves as a captivating showcase for talented artists. Whether it's the mesmerizing lens of photography or the strokes of a painter's brush, we are confident that you'll discover the missing piece with us. Feel free to explore our diverse collection and immerse yourself in the world of creativity.</p>
            </div>
            <div>
                <h3 style="color: rgb(164, 7, 7)">Useful Links</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li><a href="#" style="color: #808080; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='rgb(164, 7, 7)'" onmouseout="this.style.color='#d3d3d3'">Link 1</a></li>
                    <li><a href="#" style="color: #808080; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='rgb(164, 7, 7)'" onmouseout="this.style.color='#d3d3d3'">Link 2</a></li>
                    <li><a href="#" style="color: #808080; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='rgb(164, 7, 7)'" onmouseout="this.style.color='#d3d3d3'">Link 3</a></li>
                </ul>
            </div>
            <div style="text-align: center;">
                <h3 style="color: rgb(164, 7, 7)">Location</h3>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.926992420169!2d10.185327175691967!3d36.89209477222108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cba9a188b601%3A0xee2a38ad70274da0!2sSup&#39;com%20Junior%20Entreprise!5e0!3m2!1sfr!2stn!4v1706652523085!5m2!1sfr!2stn" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
        <div style="margin-top: -35px; color: #d3d3d3; text-align: center;">
            <h3 style="color: rgb(164, 7, 7)">Get in Contact?</h3>
            <div class="social" style="display: flex; margin: 3px; justify-content: center;">
                <a href="https://github.com/SkanderChayoukhi/MuseMingle" style="color: #d3d3d3; text-decoration: none; transition: color 0.3s ease; margin-right: 10px;" onmouseover="this.style.color='rgb(164, 7, 7)'" onmouseout="this.style.color='#808080'"><i class="fa fa-github" style="font-size: 20px;"></i></a>
                <a href="https://github.com/SkanderChayoukhi/MuseMingle" style="color: #d3d3d3; text-decoration: none; transition: color 0.3s ease; margin-right: 10px;" onmouseover="this.style.color='rgb(164, 7, 7)'" onmouseout="this.style.color='#808080'"><i class="fa fa-twitter" style="font-size: 20px;"></i></a>
                <a href="https://github.com/SkanderChayoukhi/MuseMingle" style="color: #d3d3d3; text-decoration: none; transition: color 0.3s ease; margin-right: 10px;" onmouseover="this.style.color='rgb(164, 7, 7)'" onmouseout="this.style.color='#808080'"><i class="fa fa-linkedin" style="font-size: 20px;"></i></a>
            </div>
            <p style="color: rgb(164, 7, 7);">You want to get in touch? We are just a message away!</p>
        </div>
        
        <div style="margin-top: 5px; color: #d3d3d3; text-align: center;">
            <nav>
                <a href="#" style="color: #808080; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='rgb(164, 7, 7)'" onmouseout="this.style.color='#808080'">Home</a>  |
                <a href="#" style="color: #808080; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='rgb(164, 7, 7)'" onmouseout="this.style.color='#808080'">Gallery</a>  |
                <a href="#" style="color: #808080; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='rgb(164, 7, 7)'" onmouseout="this.style.color='#808080'">Artists</a>  |
                <a href="#" style="color: #808080; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='rgb(164, 7, 7)'" onmouseout="this.style.color='#808080'">Add</a>  |
                <a href="#" style="color: #808080; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='rgb(164, 7, 7)'" onmouseout="this.style.color='#808080'">Games</a>  
            </nav>
            <div style="background: rgb(164, 7, 7); height: 30px; display: flex; align-items: center; justify-content: center;"><p>&copy; 2024 MuseMingle</p></div>
        </div>
        </footer>
        
</body>
</html>