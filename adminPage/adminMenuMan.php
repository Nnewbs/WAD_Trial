<?php
// Include database connection
include("dbconn.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
    <style>
        body {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background: #343a40;
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }

        .chart-container {
            width: 100%;
            height: 400px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h3 class="text-center">Admin Panel</h3>
        <a href="#dashboard">Dashboard</a>
        <a href="#menu-management">Menu Management</a>
        <a href="#order-management">Order Management</a>
        <a href="#transaction-summary">Transaction Summary</a>
        <a href="#registered-members">Registered Members</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="content">
        <!-- Menu Management -->
        <div id="menu-management" class="mt-5">
            <h2>Menu Management</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Item Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="menu-table">
                    <!-- Data from the database will populate here -->
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>