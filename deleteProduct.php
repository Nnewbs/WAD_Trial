<?php
include("dbconn.php");
session_start();

$id = $_GET['id'];  // Fetch the item ID from the URL

// Deleting the product
$sql = "DELETE FROM products WHERE id = '$id'";

if ($dbconn->query($sql) === TRUE) {
    echo "<script>alert('The product has been successfully deleted!'); window.location = 'adminMenuMan.php';</script>";
} else {
    echo "<script>alert('Failed to delete the product data. Please try again!'); window.location = 'adminMenuMan.php';</script>";
}
?>
