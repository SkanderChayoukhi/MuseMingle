<?php
session_start();

// Initialize cart if not exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to add item to cart
function addToCart($item) {
    $_SESSION['cart'][] = $item;
}

// Check if form submitted and add item to cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addItem'])) {
    // Sanitize and validate input (not shown in this example)
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    // Add item to cart
    addToCart(['name' => $itemName, 'price' => $itemPrice]);
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
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "musemingle";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$url = isset($_GET['url']) ? mysqli_real_escape_string($conn, $_GET['url']) : '';
$related_image = array();

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
        $id =$row['id'];
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
        $sql = "SELECT id,url_image FROM drawings WHERE nomArtist='$nn' AND id!='$id'";
        $result_related = mysqli_query($conn, $sql);
        $i = 1;
        if ($result_related) {
            while ($row1 = mysqli_fetch_assoc($result_related) and $i <= 12) {
                $related_image[] = $row1['url_image'];
                $related_image[] = $row1['id'];
                $related_image[] = "drawings";
                $i = $i + 1;
            }
        }
    }
} elseif ($resultCheck1 > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
        $id =$row['id'];
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
        $sql = "SELECT id,url_image FROM paintings WHERE nomArtist='$nn' AND id!='$id'";
        $result_related = mysqli_query($conn, $sql);
        $i = 1;
        if ($result_related) {
            while ($row1 = mysqli_fetch_assoc($result_related) and $i <= 12) {
                $related_image[] = $row1['url_image'];
                $related_image[] = $row1['id'];
                $related_image[] ="paintings";
                $i = $i + 1;
            }
        }
    }
} elseif ($resultCheck2 > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
        $id =$row['id'];
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
        $sql = "SELECT id,url_image FROM photography WHERE nomArtist='$nn' AND id!='$id'";
        $result_related = mysqli_query($conn, $sql);
        $i = 1;
        if ($result_related) {
            while ($row1 = mysqli_fetch_assoc($result_related) and $i <= 12) {
                $related_image[] = $row1['url_image'];
                $related_image[] = $row1['id'];
                $related_image[] = "photography";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Protest+Revolution&display=swap" rel="stylesheet">
 

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
    <nav id="navbar" class="navbar" >
        <a href="./home.php">
            <img src="../allphoto/logo.png" alt="">
        </a>
        <div class="navigation" style="padding-right: 50px;padding-left:150px;">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a class="active" href="./gallerypage.php">Gallery</a></li>
                <li><a  href="./contact.php">Contact us</a></li>
                <li><a  href="../games-phpuser/jeux.html">games</a></li>
                <li><a  href="../login&register/login.php">login</a></li>
                <li><a href="#demo" class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span id="cartCount" class="badge badge-pill badge-info">0</span>
                </a></li>
                
                
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
                
                      <form method="post">
                        <input type="hidden" name="addItem">
                        <!-- Item details -->
                        <input type="hidden" name="itemName" value="<?php echo $tt; ?>">
                        <input type="hidden" name="itemPrice" value="<?php echo $pp; ?>">
                        <div class="buttons">
                        <button type="submit" class="btn btn-primary add-to-cart">Add to Basket</button>
                      </div>
                    </form>
                 
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
    <div class="first" style="padding-left: 190px;padding-right: 0px;">
        <a href="<?php echo 'IMG.php?url=' . urlencode($related_image[0]) . '&id=' . urlencode($related_image[1]) . '&category=' . urlencode($related_image[2]); ?>" target="_blank">
            <img src="<?php echo $related_image[0]; ?>">
        </a>
    </div>
    <div class="second" style="padding-left: 0px;">
        <a href="<?php echo 'IMG.php?url=' . urlencode($related_image[3]) . '&id=' . urlencode($related_image[4]) . '&category=' . urlencode($related_image[5]); ?>" target="_blank">
            <img src="<?php echo $related_image[3]; ?>">
        </a>
    </div>
    <div class="third">
        <a href="<?php echo 'IMG.php?url=' . urlencode($related_image[6]) . '&id=' . urlencode($related_image[7]) . '&category=' . urlencode($related_image[8]); ?>" target="_blank">
            <img src="<?php echo $related_image[6]; ?>">
        </a>
    </div>
    <div class="four" style="padding-right: 100px;">
        <a href="<?php echo 'IMG.php?url=' . urlencode($related_image[9]) . '&id=' . urlencode($related_image[10]) . '&category=' . urlencode($related_image[11]); ?>" target="_blank">
            <img src="<?php echo $related_image[9]; ?>">
        </a>
    </div>
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

<script>
    // Function to add item to cart
function addToCart(item) {
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    // Define the request method, URL, and asynchronous flag
    xhr.open('POST', '<?php echo $_SERVER['PHP_SELF']; ?>', true); // Use PHP_SELF to send the request to the same page
    // Set the request header to specify form data
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    // Define the onload function to handle the response
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            // On successful response, update the cart count
            updateCartCount();
        } else {
            // On error, display an alert message
            alert('Failed to add item to cart. Please try again later.');
        }
    };
    // Define the onerror function to handle connection errors
    xhr.onerror = function() {
        alert('Connection error. Please try again later.');
    };
    // Encode the item object as a URL-encoded string
    var formData = 'addItem=true&itemName=' + encodeURIComponent(item.name) + '&itemPrice=' + encodeURIComponent(item.price);
    // Send the request with the form data
    xhr.send(formData);
}

// Function to retrieve and update cart count
function updateCartCount() {
    // Fetch the cart count span element
    var cartCountSpan = document.getElementById('cartCount');
    // Fetch the cart count from the server-side script
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '<?php echo $_SERVER['PHP_SELF']; ?>?getCartCount=true', true); // Use PHP_SELF to send the request to the same page
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            // Log the response text for debugging
            console.log('Response text:', xhr.responseText);
            // Update the cart count span element with the retrieved count
            cartCountSpan.innerText = xhr.responseText;
        } else {
            // On error, display an alert message
            alert('Failed to retrieve cart count. Please try again later.');
        }
    };
    xhr.onerror = function() {
        alert('Connection error. Please try again later.');
    };
    xhr.send();
}

// Update cart count on page load
updateCartCount();

// Add event listener to "Add to Cart" button
var addToCartButton = document.querySelector('.add-to-cart');
if (addToCartButton) {
    addToCartButton.addEventListener('click', function(event) {
        // Prevent default form submission
        event.preventDefault();
        // Fetch item details from hidden input fields
        var itemName = document.querySelector('input[name="itemName"]').value;
        var itemPrice = document.querySelector('input[name="itemPrice"]').value;
        // Add item to cart
        addToCart({ name: itemName, price: itemPrice });
        window.location.reload();
    });
} else {
    console.error('No element found with class "add-to-cart"');
}

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
                    <span class="name">NAME: <?php echo $item['name']; ?></span><br>
                    <span class="price" style="margin-left: 40px; font-size:20px;font-weight:200">PRICE: <?php echo $item['price']; ?>DT</span><br><br>
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

       
