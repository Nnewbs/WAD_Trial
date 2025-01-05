<?php
session_start();
require_once 'dbconn.php'; // Ensure database connection

if (isset($_POST['purchase'])) {
    // Ensure the user is logged in
    if (isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
        $totalPrice = 0;
        
        // Calculate the total price from the cart
        foreach ($_SESSION['cart'] as $key => $value) {
            $totalPrice += $value['p_price'] * $value['p_quantity'];
        }

        // Insert into the orders table
        $orderQuery = "INSERT INTO orders (user_id, total_price, status) VALUES (?, ?, 'Pending')";
        $stmt = $conn->prepare($orderQuery);
        $stmt->bind_param('id', $userId, $totalPrice);
        $stmt->execute();
        
        // Get the last inserted order_id
        $orderId = $stmt->insert_id;
        
        // Insert into the order_items table
        foreach ($_SESSION['cart'] as $key => $value) {
            $orderItemQuery = "INSERT INTO order_items (order_id, product_id, product_name, quantity, price) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($orderItemQuery);
            $stmt->bind_param('iisid', $orderId, $value['p_id'], $value['p_name'], $value['p_quantity'], $value['p_price']);
            $stmt->execute();
        }

        // Clear the cart after purchase
        unset($_SESSION['cart']);

        // Redirect to a success page or a confirmation page
        header('Location: orderSuccess.php'); // Change to the appropriate page
        exit();
    } else {
        // Handle case where user is not logged in
        echo "You must be logged in to complete a purchase.";
    }
}
?>

