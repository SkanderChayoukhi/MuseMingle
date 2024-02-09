<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../allcss/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />

    <title>Image Gallery</title>
</head>
<body>
    <section>
    <nav id="navbar" class="navbar" style="top: 0px; transition: top 0.6s ease-in-out 0s;" >
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
                      <div class="icon-container clicked">
                          <i class="fa-regular fa-images"></i>
                       </div>
                    <h4>ALL</h4>
                </div>
                <div class="category" data-category="paintings">
                           <div class="icon-container">
                              <i class="fa-solid fa-palette"></i>
                         </div>
                        <h4>Paintings</h4>
                </div>
                <div class="category" data-category="photography">
                     <div class="icon-container">
                              <i class="fa-solid fa-camera"></i>
                    </div>
                    <h4>Photography</h4>
                </div>
                <div class="category" data-category="drawings">
                      <div class="icon-container">
                          <i class="fa-solid fa-pen"></i>
                     </div>
                    <h4>Drawings</h4>
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
    <script> 
    document.addEventListener("DOMContentLoaded", function() {
    const iconContainers = document.querySelectorAll(".icon-container");

    iconContainers.forEach(function(iconContainer) {
        iconContainer.addEventListener("click", function() {
            // Remove the 'clicked' class from all icon containers
            iconContainers.forEach(function(container) {
                container.classList.remove("clicked");
            });
            // Add the 'clicked' class to the clicked icon container
            iconContainer.classList.add("clicked");
        });
    });
});
 </script>


    <script src="../alljs/script2.js"></script>
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
    </script>
</body>
</html>

