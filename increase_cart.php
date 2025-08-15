<?php
session_start();

// Ensure cart exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Get product ID and action from request
$product_id = $_GET['id'] ?? '';
$action = $_GET['action'] ?? ''; // 'increase' or 'decrease'

$response = ['success' => false, 'message' => 'Invalid request'];

if (!empty($product_id) && in_array($action, ['increase', 'decrease'])) {
    $found = false;
    
    // Find the product in the cart
    foreach ($_SESSION['cart'] as &$item) {
        $item_name = $item['product_name'] ?? ($item['name'] ?? '');
        if ($item_name === $product_id) {
            // Update quantity
            $current_qty = (int)($item['qty'] ?? 1);
            
            if ($action === 'increase') {
                $item['qty'] = $current_qty + 1;
            } else {
                // Don't decrease below 1
                $item['qty'] = max(1, $current_qty - 1);
            }
            
            $found = true;
            $response = [
                'success' => true,
                'new_quantity' => $item['qty'],
                'message' => 'Quantity updated'
            ];
            break;
        }
    }
    
    if (!$found) {
        $response['message'] = 'Product not found in cart';
    }
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
exit();
