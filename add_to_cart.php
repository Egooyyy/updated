<?php
session_start();

// Ensure cart exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

function sanitize_price($price) {
    return (float) str_replace(',', '', $price);
}

// Handle adding item to cart
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $price = isset($_POST['price']) ? sanitize_price($_POST['price']) : 0;
    $color = $_POST['color'] ?? 'N/A';
    $qty = isset($_POST['qty']) ? (int)$_POST['qty'] : 1;
    $gb = $_POST['gb'] ?? '';
    $img = $_POST['img'] ?? 'images/default-product.jpg';
    
    if (!empty($name) && $price > 0) {
        // Try to find existing entry to increment
        $foundIdx = null;
        foreach ($_SESSION['cart'] as $idx => $row) {
            $rowName = $row['product_name'] ?? ($row['name'] ?? '');
            $rowColor = $row['color'] ?? '';
            if ($rowName === $name && $rowColor === $color) { 
                $foundIdx = $idx; 
                break; 
            }
        }
        
        if ($foundIdx !== null) {
            if (isset($_SESSION['cart'][$foundIdx]['qty'])) {
                $_SESSION['cart'][$foundIdx]['qty'] += $qty;
            } else {
                $_SESSION['cart'][$foundIdx]['qty'] = $qty;
            }
        } else {
            // Add new item
            $_SESSION['cart'][] = [
                'product_name' => $name,
                'gb' => $gb,
                'color' => $color,
                'price' => $price,
                'qty' => $qty,
                'img' => $img
            ];
        }
    }
    
    // Return success response
    header('Content-Type: application/json');
    echo json_encode(['success' => true]);
    exit();
}

// If not a POST request, redirect to home
header('Location: home.php');
exit();