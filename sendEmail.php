<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = "user@example.com"; // Replace with the user's email address
    $subject = "Purchase Successful";
    $message = "Thank you for your purchase! Your transaction was successful.";
    $headers = "From: noreply@pavimart.shop"; // Replace with your domain email

    // Use PHP's mail function to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send email']);
    }
    exit;
}
