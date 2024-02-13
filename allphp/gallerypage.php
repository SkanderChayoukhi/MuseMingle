<?php 
session_start();

// Initialize cart if not exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
// Function to get cart count
function getCartCount() {
    // Return cart count
    echo count($_SESSION['cart']);
    exit();
}

// Check if AJAX request to get cart count
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['getCartCount'])) {
    getCartCount();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../allcss/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Protest+Revolution&display=swap" rel="stylesheet">
    
    <title>Image Gallery</title>

    <style>
    .cart-icon {
        color: #333; /* Change color as needed */
        font-size: 20px; /* Adjust font size as needed */
    }
.modal {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  top: 0; right: 0;
  bottom: 0; left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(77, 77, 77, .7);
  transition: all .4s;
}
.modal:target {
  visibility: visible;
  opacity: 1;
}
.modal_content {
  border-radius: 4px;
  position: relative;
  width: 500px;
  max-width: 90%;
  background: white;
  padding: 1.5em 2em;
}

.modal_close {
  position: absolute;
  top: 10px;
  right: 10px;
  color: grey;
  text-decoration: none;
}
  </style>
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
                <li><a  href="./contact.php">Contact us</a></li>
                <li><a  href="../games-page/jeux.html">Games</a></li>
                <li><a  href="../login&register/logout.php">Logout</a></li>
                <li>
                <a href="#demo" class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span id="cartCount" class="badge badge-pill badge-info">0</span>
                </a>
            </li>
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
                
                
                <button id="addImageButton" >Add Art</button>
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
// Function to retrieve and update cart count from server
function updateCartCount() {
    // Fetch the cart count span element
    var cartCountSpan = document.getElementById('cartCount');
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    // Define the request method, URL, and asynchronous flag
    xhr.open('GET', '<?php echo $_SERVER['PHP_SELF']; ?>?getCartCount=true', true);
    // Define the onload function to handle the response
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            console.log('Response text:', xhr.responseText);
            // Update the cart count span element with the retrieved count
            cartCountSpan.innerText = xhr.responseText;
        }
    };
    // Define the onerror function to handle connection errors
    xhr.onerror = function() {
        alert('Connection error. Please try again later.');
    };
    // Send the request
    xhr.send();
}

// Update cart count on page load
updateCartCount();
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

<div id="demo" class="modal">
  <div class="modal_content">
  <?php

// Initialize cart if not exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to remove item from cart
function removeFromCart($index) {
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
    }
}

// Check if action is to remove item from cart
if (isset($_GET['action']) && $_GET['action'] === 'remove' && isset($_GET['index'])) {
    $index = $_GET['index'];
    removeFromCart($index);
    // Redirect back to cart page to reflect changes
    header('Location: cart.php');
    exit;
}
?>
    <h1 style="text-align: center; font-size:40px;font-family:Protest Revolution;color:rgb(164, 7, 7)">Shopping Cart</h1><br>
    <div class="cart-items">
        <?php if (empty($_SESSION['cart'])) : ?>
            <p>Your cart is empty.</p>
        <?php else : ?>
            <?php foreach ($_SESSION['cart'] as $index => $item) : ?>
                <div class="item">
                    <button class="delete-btn" onclick="removeItem(<?php echo $index; ?>)">❌ </button>
                    <span class="name"><?php echo $item['name']; ?></span>
                    <span class="price"><?php echo $item['price']; ?>DT</span>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <script>
        function removeItem(index) {
            if (confirm("Are you sure you want to remove this item from the cart?")) {
                // Send an AJAX request to remove the item from the cart
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'cart.php?action=remove&index=' + index, true);
                xhr.onload = function () {
                    if (xhr.status >= 200 && xhr.status < 300) {
                        // Reload the page to reflect the changes
                        window.location.reload();
                    } else {
                        alert('Failed to remove item from cart.');
                    }
                };
                xhr.send();
            }
        }
    </script>
    <a href="#" class="modal_close">&times;</a>
  </div>
</div>
</body>
</html>