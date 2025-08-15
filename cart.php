<?php
session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>iTech Cart</title>
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            font-family: "Poppins", "Segoe UI", sans-serif;
            padding: 20px;
        }
        .container.layout_padding {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.05);
            max-width: 1200px;
            margin: auto;
        }
        .cart-icon {
            position: relative;
            display: inline-block;
        }
        .cart-badge {
            position: absolute;
            top: -8px;
            right: -10px;
            background: red;
            color: white;
            border-radius: 50%;
            font-size: 12px;
            padding: 2px 6px;
        }
        .table thead th {
            background: linear-gradient(135deg, #2c3e50, #4b6584);
            color: white;
            font-weight: 500;
            padding: 12px 15px;
        }
        .color-swatch {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 5px;
            vertical-align: middle;
            border: 1px solid #ddd;
        }
        .btn-success {
            background: #e04a00;
            border: none;
            padding: 10px 25px;
            font-weight: 500;
        }
        .btn-success:hover {
            background: #c04200;
        }
    </style>
</head>
<body>
    <div class="container layout_padding">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="home.php" class="btn btn-outline-dark">← Back to Shop</a>

        
            
        </div>

        <h2>Your Shopping Cart</h2>

        <?php if (empty($_SESSION['cart'])): ?>
            <div class="alert alert-warning text-center">
                Your cart is empty. 
                <a href="home.php" class="btn btn-primary">Continue Shopping</a>
            </div>
        <?php else: ?>
            <form action="checkout.php" method="post">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $total = 0;
                        foreach ($_SESSION['cart'] as $index => $item): 
                            $itemTotal = $item['price'] * $item['qty'];
                            $total += $itemTotal;
                        ?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="<?= htmlspecialchars($item['img']) ?>" alt="" width="60" height="60" class="mr-2" style="object-fit: cover;">
                                        <div>
                                            <strong><?= htmlspecialchars($item['product_name']) ?></strong><br>
                                            <small><?= htmlspecialchars($item['gb']) ?></small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="color-swatch" style="background-color: <?= htmlspecialchars($item['color']) ?>"></span>
                                    <?= htmlspecialchars($item['color']) ?>
                                </td>
                                <td>₱<?= number_format($item['price'], 2) ?></td>
                                <td>
                                    <div class="input-group" style="max-width: 120px;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary btn-sm update-qty" data-action="decrement" data-id="<?= $index ?>">-</button>
                                        </div>
                                        <input type="number" class="form-control form-control-sm text-center quantity-input" 
                                               value="<?= $item['qty'] ?>" min="1" data-id="<?= $index ?>">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-sm update-qty" data-action="increment" data-id="<?= $index ?>">+</button>
                                        </div>
                                    </div>
                                </td>
                                <td class="item-total">₱<?= number_format($itemTotal, 2) ?></td>
                                <td>
                                    <!-- Changed from link to button with data attribute -->
                                    <button type="button" class="btn btn-sm btn-danger remove-item" data-id="<?= htmlspecialchars($item['product_name']) ?>">
                                        Remove
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="text-right mb-4">
                    <h4>Total: ₱<?= number_format($total, 2) ?></h4>
                </div>

                <div class="text-right">
                    <a href="home.php" class="btn btn-outline-secondary">Continue Shopping</a>
                    <button type="submit" class="btn btn-success">Proceed to Checkout</button>
                </div>
            </form>
        <?php endif; ?>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script>
    $(document).ready(function () {
        // Handle quantity updates
        $('.update-qty').on('click', function() {
            const button = $(this);
            const action = button.data('action');
            const itemId = button.data('id');
            const quantityInput = $(`.quantity-input[data-id="${itemId}"]`);
            let quantity = parseInt(quantityInput.val()) || 1;
            
            if (action === 'increment') {
                quantity++;
            } else if (action === 'decrement' && quantity > 1) {
                quantity--;
            }
            
            if (quantity !== parseInt(quantityInput.val())) {
                quantityInput.val(quantity);
                updateCartItem(itemId, quantity);
            }
        });
        
        // Handle direct input changes
        $('.quantity-input').on('change', function() {
            const input = $(this);
            const itemId = input.data('id');
            let quantity = parseInt(input.val()) || 1;
            
            if (quantity < 1) {
                quantity = 1;
                input.val(1);
            }
            
            updateCartItem(itemId, quantity);
        });
        
        // Function to update cart item quantity via AJAX
        function updateCartItem(itemId, quantity) {
            $.ajax({
                url: 'update_cart_quantity.php',
                type: 'POST',
                data: { 
                    item_id: itemId, 
                    quantity: quantity 
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Update the item total
                        const row = $(`input[data-id="${itemId}"]`).closest('tr');
                        const price = parseFloat(row.find('td:eq(2)').text().replace(/[^0-9.]/g, ''));
                        const total = (price * quantity).toFixed(2);
                        row.find('.item-total').text('₱' + total);
                        
                        // Update cart count in header
                        $('.cart-badge').text(response.cart_count);
                        
                        // Update grand total
                        updateGrandTotal();
                    } else {
                        alert('Failed to update quantity. ' + (response.message || ''));
                        location.reload(); // Reload to sync with server
                    }
                },
                error: function() {
                    alert('Error updating quantity. Please try again.');
                    location.reload(); // Reload to sync with server
                }
            });
        }
        
        // Function to update grand total
        function updateGrandTotal() {
            let grandTotal = 0;
            $('tbody tr').each(function() {
                const total = parseFloat($(this).find('.item-total').text().replace(/[^0-9.]/g, ''));
                grandTotal += total;
            });
            $('h4').text('Total: ₱' + grandTotal.toFixed(2));
        }
        
        $('.remove-item').on('click', function () {
            if (!confirm('Are you sure you want to remove this item?')) {
                return;
            }

            const button = $(this);
            const productId = button.data('id');

            $.ajax({
                url: 'remove_from_cart.php',
                type: 'GET',
                data: { id: productId },
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        // Fade out and remove the row
                        button.closest('tr').fadeOut(300, function () {
                            $(this).remove();
                            // Reload the page to update totals and cart badge
                            location.reload();
                        });
                    } else {
                        alert('Failed to remove item.');
                    }
                },
                error: function () {
                    alert('Failed to remove item. Please try again.');
                }
            });
        });
    });
    </script>
</body>
</html>
