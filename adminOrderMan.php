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

        .transaction-history {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h3 class="text-center">Admin Panel</h3>
        <a href="adminHome.php">Dashboard</a>
        <a href="adminMenuMan.php">Menu Management</a>
        <a href="adminOrderMan.php">Order Management</a>
        <a href="adminMemView.php">Registered Members</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="content">
        <!-- Order Management -->
        <div id="order-management" class="mt-5">
            <h2>Order Management</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Order Number</th>
                        <th>Customer Name</th>
                        <th>Total Amount</th>
                        <th>Order Date</th>
                        <th>Order Status</th> <!-- New Column for Order Status -->
                    </tr>
                </thead>
                <tbody id="order-table">
                    <!-- Order data will populate here -->
                    <!-- Sample data -->
                    <tr>
                        <td>1</td>
                        <td>#12345</td>
                        <td>John Doe</td>
                        <td>$50</td>
                        <td>2025-01-12</td>
                        <td><span class="badge badge-success">Accepted</span></td> <!-- Order status (Accepted) -->
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>#12346</td>
                        <td>Jane Smith</td>
                        <td>$35</td>
                        <td>2025-01-13</td>
                        <td><span class="badge badge-danger">Not Accepted</span></td> <!-- Order status (Not Accepted) -->
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Transaction History Section -->
        <div class="transaction-history">
            <h2>Transaction History</h2>
            <button class="btn btn-primary" onclick="downloadPDF()">Download PDF</button>
            <!-- Add your logic here to handle PDF generation -->
        </div>

    </div>

    <script>
        function downloadPDF() {
            // Placeholder logic for downloading a PDF file
            // You can implement the actual PDF generation here using a library like jsPDF
            alert('PDF download initiated');
        }
    </script>
</body>

</html>
