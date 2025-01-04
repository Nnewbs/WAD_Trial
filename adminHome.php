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
        <a href="index.php">Logout</a>
    </div>

    <div class="content">
        <!-- Dashboard -->
        <div id="dashboard">
            <h2>Dashboard</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5>Total Orders</h5>
                            <h3 id="total-orders">0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5>Total Revenue</h5>
                            <h3 id="total-revenue">$0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-white">
                        <div class="card-body">
                            <h5>User Registrations</h5>
                            <h3 id="user-registrations">0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="chart-container">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Chart.js example
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April'],
                datasets: [{
                    label: 'Sales Value',
                    data: [1200, 1900, 3000, 5000],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                }],
            },
        });

        // Populate data dynamically (mock example for now)
        document.getElementById('total-orders').innerText = 150;
        document.getElementById('total-revenue').innerText = '$4500';
        document.getElementById('user-registrations').innerText = 25;
    </script>
</body>

</html>