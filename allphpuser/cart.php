<?php
session_start();

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <div class="cart-items">
        <?php if (empty($_SESSION['cart'])) : ?>
            <p>Your cart is empty.</p>
        <?php else : ?>
            <?php foreach ($_SESSION['cart'] as $index => $item) : ?>
                <div class="item">
                    <span class="name"><?php echo $item['name']; ?></span>
                    <span class="price"><?php echo $item['price']; ?></span>
                    <button class="delete-btn" onclick="removeItem(<?php echo $index; ?>)">❌</button>
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
</body>
</html>
