<?php
session_start();

// Ensure cart exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    // Find and remove the item from the cart
    foreach ($_SESSION['cart'] as $key => $item) {
        $item_name = $item['product_name'] ?? ($item['name'] ?? '');
        if ($item_name === $product_id) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
    
    // Reindex array to maintain proper numeric keys
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

// Return success response
header('Content-Type: application/json');
echo json_encode(['success' => true]);
exit();